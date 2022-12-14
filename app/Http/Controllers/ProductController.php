<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Discount;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use Image as ImageLib;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller{
    public function getAll(Request $r, $filter_type = null, $filter_value = null){
        if ($filter_type == 'new') {
            $AllProducts = Product::where('status', '!=', 'hidden')->with(['Brand', 'Category'])->whereDate('created_at', '>', Carbon::now()->subMonth(4))->orderBy('created_at', 'DESC')->get();
            return view('product.new', compact('AllProducts', 'r'));
        } elseif ($filter_type == 'sale') {
            $AllProducts = Product::where('status', '<>', 'hidden')->where('discount_id', '<>', null)->orderBy('qty', 'DESC')->orderBy('created_at', 'DESC')->get();
            return view('product.sale', compact('AllProducts', 'r'));
        }else {
            if (count($r->all()) > 0 && !$r->has('page')) {
                if ($r->has('color') && $r->color != '') {
                    $Color = ['color', 'LIKE', '%' . $r->color . '%'];
                } else {
                    $Color = ['color', '<>', 'Test'];
                }
                if ($r->has('size') && count($r->size) > 0) {
                    $Size = $r->size;
                    array_map('strval', $Size);
                } else {
                    $Size = Product::all()->pluck('size')->unique();
                }

                if ($r->has('availability') && $r->availability != '') {
                    $Availabilty = ['status', $r->availability];
                } else {
                    $Availabilty = ['status', '<>', 'hidden'];
                }

                if ($r->has('brand') && $r->brand != '') {
                    $Brand = ['brand_id', $r->brand];
                } else {
                    $Brand = ['brand_id', '<>', '0'];
                }

                if ($r->has('category') && $r->category != '') {
                    $Category = ['category_id', $r->category];
                } else {
                    $Category = ['category_id', '<>', '0'];
                }

                if ($r->has('condition') && $r->condition != '') {
                    $Condition = ['condition', $r->condition];
                } else {
                    $Condition = ['condition', '<>', 'Test'];
                }

                if ($r->has('price_from') && $r->price_from != '') {
                    $PriceFrom = ['price', '>=', intval($r->price_from)];
                } else {
                    $PriceFrom = ['price', '>=', 0];
                }

                if ($r->has('price_to') && $r->price_to != '') {
                    $PriceTo = ['price', '<=', intval($r->price_to)];
                } else {
                    $PriceTo = ['price', '<=', 9999999999999];
                }
                //There is a filter
                if (!$filter_type) {
                    $AllProducts = Product::with(['Brand', 'Category'])->where([$Color, $Condition, $PriceFrom, $PriceTo, $Availabilty, $Brand, $Category])->whereIn('size', $Size)->orderBy('qty', 'DESC')->orderBy('created_at', 'DESC');
                    if (isset($r->search) && $r->search != '') {
                        $SearchTerm = $r->search;
                        $AllProducts = $AllProducts->with('Category')
                            ->join('brands', 'products.brand_id', '=', 'brands.id')
                            ->join('categories', 'products.category_id', '=', 'categories.id');
                        $AllProducts->where(function ($query) use ($SearchTerm) {
                            $query->where('products.title', 'LIKE', '%' . $SearchTerm . '%')
                                ->orWhere('products.sku', $SearchTerm)
                                ->orWhere('brands.title', 'LIKE', '%' . $SearchTerm . '%')
                                ->orWhere('categories.title', 'LIKE', '%' . $SearchTerm . '%');
                        })->select('products.*');
                    }
                    $TheFilter = null;
                    $AllProducts = $AllProducts->get();
                } else {
                    if ($filter_type == 'brand') {
                        $TheFilter = Brand::where('slug', $filter_value)->first();
                        if ($TheFilter) {
                            $Brand = ['brand_id', '=', $TheFilter->id];
                            $AllProducts = Product::with(['Brand', 'Category'])->where([$Color, $Condition, $PriceFrom, $Availabilty, $PriceTo, $Brand, $Category])->whereIn('size', $Size)->orderBy('qty', 'DESC')->orderBy('created_at', 'DESC')->get();
                        } else {
                            abort(404);
                            $AllProducts = [];
                        }
                    }
                    if ($filter_type == 'category') {
                        $TheFilter = Category::where('slug', $filter_value)->first();
                        if ($TheFilter) {
                            $TheCategoriesIds = Category::where('type', 'sub')->where('parent_id', $TheFilter->id)->pluck('id')->toArray();
                            array_push($TheCategoriesIds, $TheFilter->id);
                            $AllProducts = Product::with(['Brand', 'Category'])->where([$Color, $Condition, $PriceFrom, $Availabilty, $PriceTo, $Brand, $Category])->whereIn('category_id', $TheCategoriesIds)->whereIn('size', $Size)->orderBy('qty', 'DESC')->orderBy('created_at', 'DESC')->get();
                        } else {
                            abort(404);
                            $AllProducts = [];
                        }
                    }
                }
            } else {
                //No Filter
                if (!$filter_type) {
                    $AllProducts = Product::with(['Brand', 'Category'])->where('status', '<>', 'hidden')->orderBy('created_at', 'DESC')->paginate(15);
                    $TheFilter = null;
                } else {
                    if ($filter_type == 'brand') {
                        $TheFilter = Brand::where('slug', $filter_value)->first();
                        if ($TheFilter) {
                            $AllProducts = Product::with(['Brand', 'Category'])->where('status', '<>', 'hidden')->where('brand_id', $TheFilter->id)->orderBy('qty', 'DESC')->orderBy('created_at', 'DESC')->get();
                        } else {
                            abort(404);
                            $AllProducts = [];
                        }
                    }
                    if ($filter_type == 'category') {
                        $TheFilter = Category::where('slug', $filter_value)->first();
                        if ($TheFilter) {
                            $TheCategoriesIds = Category::where('type', 'sub')->where('parent_id', $TheFilter->id)->pluck('id')->toArray();
                            array_push($TheCategoriesIds, $TheFilter->id);
                            $AllProducts = Product::with(['Brand', 'Category'])->where('status', '<>', 'hidden')->whereIn('category_id', $TheCategoriesIds)->orderBy('qty', 'DESC')->orderBy('created_at', 'DESC')->get();
                        } else {
                            abort(404);
                            $AllProducts = [];
                        }
                    }
                }
            }
            $TotalResultes = $AllProducts->count();
            // $AllProducts = $AllProducts->paginate(15);
            // dd($AllProducts);
            $AllColors = Product::where('status', '<>', 'hidden')->orderBy('color', 'ASC')->pluck('color')->unique();
            $AllSizes = Product::where('status', '<>', 'hidden')->orderBy('size', 'DESC')->pluck('size')->unique();
            $AllCategories = ProductCategory::all();
            $AllBrands = Brand::all();
            return view('product.all', compact('AllProducts','AllBrands' , 'TheFilter', 'AllColors', 'AllSizes', 'r', 'TotalResultes', 'AllCategories'));
        }
    }
    public function getSingle($slug , $id){
        if(auth()->check()){
            if(auth()->user()->role == 2){
                $TheProduct = Product::where('id' , $id)->first();
            }else{
                $TheProduct = Product::where('status','!=','hidden')->where('id' , $id)->first();
            }
        }else{
            $TheProduct = Product::where('status','!=','hidden')->where('id' , $id)->first();
        }
        if(!$TheProduct){abort(404);}
        return view('product.single' , compact('TheProduct'));
    }
    public function getProductData(Request $r, $id){
            $TheProduct = Product::where('status','!=','hidden')->where('id' , $id)->first();
        if(!$TheProduct){
            return response('Product not found', 404);
        }
        return response()->json(['data' => $TheProduct , 'status' => 'success']);
    }

    public function getAdminProducts(){
        $AllProducts = Product::all();
        return view('admin.product.all', compact('AllProducts'));
    }
    public function getCreateProduct(){
        $AllCategories = ProductCategory::all();
        $AllDiscounts = Discount::all();
        return view('admin.product.new', compact('AllCategories', 'AllDiscounts'));
    }
    public function postCreateProduct(Request $r){
        $Rules = [
            'title' => 'required|min:5|max:255',
            'slug' => 'required',
            'sku' => 'required|unique:products',
            'description' => 'required',
            'image' => 'required|image|max:15000',
            'price' => 'required|numeric',
            'category_id' => 'required',
            'qty' => 'required|numeric',
        ];
        $Messages = [
            'category_id.required' => "The Category field is required"
        ];
        $Validator = Validator::make($r->all(), $Rules, $Messages);
        if ($Validator->fails()) {
            return back()->withErrors($Validator->errors()->all());
        } else {
            $ProductData =  $r->except('images');
            $ProductData['user_id'] = auth()->user()->id;
            $ProductData['status'] = 1;
            $Category = ProductCategory::where('id', $r->category_id)->first();
            $ProductData['search_index'] = $r->sku . ' ' . $r->title . ' ' . $Category->title . ' ' . $r->color . ' ' . $r->size . ' ' . $Category->gender;
            $r->has('is_featured') ? $ProductData['is_featured'] = 1 : $ProductData['is_featured'] = 0;
            if ($r->has('image')) {
                //Resize the image file & upload it (250x250) (60x60) (650x650)
                $img = ImageLib::make($r->image);
                // backup status
                $img->backup();
                // Tiny Thumb
                $img->fit(100, 75);
                $img->save('storage/app/products/small_thumb/' . strtolower(str_replace(' ', '-', $r->sku)) . '.' . $r->image->getClientOriginalExtension());
                $img->reset();
                // Thumb
                $img->fit(457, 610);
                $img->save('storage/app/products/thumb/' . strtolower(str_replace(' ', '-', $r->sku)) . '.' . $r->image->getClientOriginalExtension());
                $img->reset();
                // Full Size 1000 * 1400
                $img->save('storage/app/products/full_size/' . strtolower(str_replace(' ', '-', $r->sku)) . '.' . $r->image->getClientOriginalExtension());
                $img->reset();
                $ProductData['image'] = strtolower(str_replace(' ', '-', $r->sku)) . '.' . $r->image->getClientOriginalExtension();
            }
            // dd($ProductData);
            $TheProduct = Product::create($ProductData);


            if ($r->has('images')) {
                foreach ($r->images as $SingleImage) {
                    $RandomNumber = '-' . $r->sku . rand(1, 999999999999999) . '-' . microtime();
                    $RandomNumber = str_replace(' ', '', $RandomNumber);
                    //Resize the image file & upload it (250x250) (60x60) (650x650)
                    $img = ImageLib::make($SingleImage);
                    // backup status
                    $img->backup();
                    // Tiny Thumb
                    $img->fit(100, 75);
                    $img->save('storage/app/products_gallery/small_thumb/' . strtolower(str_replace(' ', '-', $r->id)) . $RandomNumber . '.' . $SingleImage->getClientOriginalExtension());
                    $img->reset();
                    // Thumb
                    $img->fit(457, 610);
                    $img->save('storage/app/products_gallery/thumb/' . strtolower(str_replace(' ', '-', $r->id)) . $RandomNumber . '.' . $SingleImage->getClientOriginalExtension());
                    $img->reset();
                    // Full Size 1000 * 1400
                    $img->save('storage/app/products_gallery/full_size/' . strtolower(str_replace(' ', '-', $r->id)) . $RandomNumber . '.' . $SingleImage->getClientOriginalExtension());
                    $img->reset();
                    $TheImage = strtolower(str_replace(' ', '-', $r->id)) . $RandomNumber . '.' . $SingleImage->getClientOriginalExtension();
                    ProductImage::create([
                        'product_id' => $TheProduct->id,
                        'image' => $TheImage
                    ]);
                }
            }
            return redirect()->route('admin.products.all')->withSuccess("Product Created Successfully");
        }
    }
    public function getEditProduct($id){
        $TheProduct = Product::findOrFail($id);
        $AllCategories = ProductCategory::orderBy('gender', 'DESC')->get();
        $AllDiscounts = Discount::latest()->get();
        return view('admin.product.edit', compact('AllCategories', 'AllDiscounts', 'TheProduct'));
    }
    public function postEditProduct(Request $r, $id){
        $TheProduct = Product::findOrFail($id);
        $Rules = [
            'title' => 'required|min:5|max:255',
            'sku' => 'required',
            'description' => 'required',
            'image' => 'image|max:15000',
            'price' => 'required|numeric',
            'category_id' => 'required',
            'qty' => 'required|numeric',
            'status' => 'required|numeric',
        ];
        $Messages = [
            'category_id.required' => "The Category field is required"
        ];
        $Validator = Validator::make($r->all(), $Rules, $Messages);
        if ($Validator->fails()) {
            return back()->withErrors($Validator->errors()->all());
        } else {
            $ProductData = $r->all();
            $ProductData['user_id'] = auth()->user()->id;
            $Category = ProductCategory::where('id', $r->category_id)->first();
            $ProductData['search_index'] = $r->sku . ' ' . $r->title . ' ' . $Category->title . ' ' . $r->color . ' ' . $r->size . ' ' . $Category->gender;
            $r->has('is_featured') ? $ProductData['is_featured'] = 1 : $ProductData['is_featured'] = 0;
            if ($r->has('image')) {
                //Resize the image file & upload it (250x250) (60x60) (650x650)
                $img = ImageLib::make($r->image);
                // backup status
                $img->backup();
                // Tiny Thumb
                $img->fit(60, 60);
                $img->save('storage/app/products/small_thumb/' . strtolower(str_replace(' ', '-', $r->sku)) . '.' . $r->image->getClientOriginalExtension());
                $img->reset();
                // Thumb
                $img->fit(250, 250);
                $img->save('storage/app/products/thumb/' . strtolower(str_replace(' ', '-', $r->sku)) . '.' . $r->image->getClientOriginalExtension());
                $img->reset();
                // Full Size
                $img->save('storage/app/products/full_size/' . strtolower(str_replace(' ', '-', $r->sku)) . '.' . $r->image->getClientOriginalExtension());
                $img->reset();
                $ProductData['image'] = strtolower(str_replace(' ', '-', $r->sku)) . '.' . $r->image->getClientOriginalExtension();
            }
            $TheProduct->update($ProductData);
            return redirect()->route('admin.products.all')->withSuccess("Product Updated Successfully");
        }
    }
    public function deleteProduct($id){
        //Validate the product
        $TheProduct = Product::findOrFail($id);
        // dd($TheProduct);
        if ($TheProduct) {
            Storage::disk('local')->delete('products/full_size/' . $TheProduct->image);
            Storage::disk('local')->delete('products/thumb/' . $TheProduct->image);
            Storage::disk('local')->delete('products/small_thumb/' . $TheProduct->image);
            if (count($TheProduct->Gallery) > 0) {
                foreach ($TheProduct->Gallery as $Gallery) {
                    #Delete the files
                    Storage::disk('local')->delete('products_gallery/full_size/' . $Gallery->image);
                    Storage::disk('local')->delete('products_gallery/thumb/' . $Gallery->image);
                    Storage::disk('local')->delete('products_gallery/small_thumb/' . $Gallery->image);
                    #Delete the DB records
                    $Gallery->delete();
                }
                $TheProduct->delete();
                return back()->withSuccess('Product deleted Successfully');
            } else {
                $TheProduct->delete();
                return back()->withSuccess('Product deleted Successfully');
            }
        }
    }
}

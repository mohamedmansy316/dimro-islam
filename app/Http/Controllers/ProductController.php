<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Discount;
use App\Models\Product;
use Image as ImageLib;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
    public function getAll(){
        $AllProducts = Product::where('status', '<>' ,'hidden')->get();
        return view('product.all', compact('AllProducts'));
    }
    public function getAdminProducts(){
        $AllProducts = Product::all();
        return view('admin.product.all', compact('AllProducts'));
    }
    public function getCreateProduct(){
        $AllCategories = Category::where('is_active', 1);
        $AllDiscounts = Discount::all();
        return view('admin.product.new', compact('AllCategories', 'AllDiscounts'));
    }
    public function postCreateProduct(Request $r){
        // dd($r->all());
        $Rules = [
            'title' => 'required|min:5|max:255',
            'slug' => 'required',
            'sku' => 'required|unique:products',
            'status' => 'required',
            'description' => 'required',
            'image' => 'required|image|max:15000',
            'price' => 'required',
            // 'category_id' => 'required',
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $ProductData = $r->all();
            $ProductData['user_id'] = auth()->user()->id;
            $ProductData['qty'] = 3;
            $ProductData['category_id'] = 1;
            // dd($ProductData);
            if($r->has('image')){
                //Resize the image file & upload it (250x250) (60x60) (650x650)
                $img = ImageLib::make($r->image);
                // backup status
                $img->backup();
                // Tiny Thumb
                $img->fit(270, 360);
                $img->save('storage/app/products/small_thumb/'.strtolower(str_replace(' ' , '-' ,$r->sku)).'.'.$r->image->getClientOriginalExtension());
                $img->reset();
                // Thumb
                $img->fit(250, 250);
                $img->save('storage/app/products/thumb/'.strtolower(str_replace(' ' , '-' ,$r->sku)).'.'.$r->image->getClientOriginalExtension());
                $img->reset();
                // Full Size
                $img->save('storage/app/products/full_size/'.strtolower(str_replace(' ' , '-' ,$r->sku)).'.'.$r->image->getClientOriginalExtension());
                $img->reset();
                $ProductData['image'] = strtolower(str_replace(' ' , '-' ,$r->sku)).'.'.$r->image->getClientOriginalExtension();
            }
            Product::create($ProductData);
        return redirect()->route('admin.products.all');
        }
    }
}

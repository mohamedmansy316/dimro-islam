<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Image as ImageLib;

class ProductCategoryController extends Controller{
    public function getAdminProductCategory(){
        $AllCategories = ProductCategory::all();
        return view('admin.productsCategories.all', compact('AllCategories'));
    }
    public function getCreateProductCategory(){
        $AllCategories = ProductCategory::where('type', 'main')->get();
        return view('admin.productsCategories.new', compact('AllCategories'));
    }
    public function postCreateProductCategory(Request $r){
        $Rules = [
            'title' => 'required',
            'slug' => 'required',
            'image' => 'image|max:45000',
            'gender' => 'required|in:men,women,unisex',
            'type' => 'required|in:main,sub',
            'order_number' => 'required',
        ];
        if($r->type == 'sub'){
            $Rules = [
                'parent_id' => 'required',
            ];
        }
        $Meesages = [
            'parent_id.required' => 'Parent category is required'
        ];
        $Validator = Validator::make($r->all(), $Rules, $Meesages);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $CategoryData = $r->all();
            $r->has('is_featured') ? $CategoryData['is_featured'] = 1 : $CategoryData['is_featured'] = 0 ;
            if($r->has('image')){
                $img = ImageLib::make($r->image);
                // backup status
                $img->backup();
                $img->fit(350, 350);
                $img->save('storage/app/products/categories/'.$CategoryData['slug'].'.'.$r->image->getClientOriginalExtension());
                $CategoryData['image'] = $CategoryData['slug'].'.'.$r->image->getClientOriginalExtension();
            }
            ProductCategory::create($CategoryData);
            return redirect()->route('admin.productCategory.all')->withSuccess("Category Added Successfully");
        }
    }
    public function getEditProductCategory($id){
        $Category = ProductCategory::where('id', $id)->first();
        $AllCategories = ProductCategory::where('type', 'main')->get();
        return view('admin.productsCategories.edit', compact('Category', 'AllCategories'));
    }
    public function postEditProductCategory(Request $r, $id){
        $TheCategory = ProductCategory::findOrFail($id);
        $Rules = [
            'title' => 'required',
            'type' => 'required|in:main,sub',
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $CategoryData = $r->all();
            $r->has('is_featured') ? $CategoryData['is_featured'] = 1 : $CategoryData['is_featured'] = 0 ;
            $TheCategory->update($CategoryData);
            return redirect()->route('admin.category.all')->withSuccess("Category Updated Successfully");
        }
    }
    public function ProductCategoryDelete($id){
        ProductCategory::findOrFail($id)->delete();
        return redirect()->route('admin.productCategory.all')->withSuccess("Category Deleted Successfully");
    }
}

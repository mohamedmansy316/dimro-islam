<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Audio;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Book;
use App\Models\Fatawa;
use App\Models\Video;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller{

    // For Admin
    public function getAllCategories(){
        $AllCategories = Category::all();
        return view('admin.category.all', compact('AllCategories'));
    }
    public function getCreateCategory(){
        $AllCategories = Category::where('is_active', 1)->get();
        return view('admin.category.new', compact('AllCategories'));
    }
    public function postCreateCategory(Request $r){
        $Rules = [
            'title' => 'required',
            'slug' => 'required',
            'type' => 'required|in:main,sub',
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
        dd($Validator->errors()->all());

            return back()->withErrors($Validator->errors()->all());
        }else{
            $CategoryData = $r->all();
            $CategoryData['slug'] = str_replace('?' , '-' , strtolower(preg_replace("/[^A-Za-z0-9.!?]/" , '-' ,$CategoryData['slug'])));
            $CategoryData['is_active'] = 1;
            Category::create($CategoryData);
            return redirect()->route('admin.category.all')->withSuccess("Category Added Successfully");
        }
    }
    public function getEditCategory($id){
        $Category = Category::where('id', $id)->first();
        $AllCategories = Category::where('is_active', 1)->get();
        return view('admin.category.edit', compact('Category', 'AllCategories'));
    }
    public function postEditCategory(Request $r, $id){
        $TheCategory = Category::findOrFail($id);
        $Rules = [
            'title' => 'required',
            'type' => 'required|in:main,sub',
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $CategoryData = $r->all();
            if($r->has('is_active')){
                $CategoryData['is_active'] = 1;
                }else {
                    $CategoryData['is_active'] = 0;
                }
            $TheCategory->update($CategoryData);
            return redirect()->route('admin.category.all')->withSuccess("Category Updated Successfully");
        }
    }
    public function deleteCategory($id){
        Category::findOrFail($id)->delete();
        //set article to inactive where category_id = $id
        Blog::where('category_id',$id)->get()->map(function($item){
            $item->update(['is_active'=>0]);
        });
        return redirect()->route('admin.category.all')->withSuccess("Category Deleted Successfully");
    }
}

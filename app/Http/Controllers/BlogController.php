<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;
// use Validator;
use Image as ImageLib;

class BlogController extends Controller
{
    public function getBlogs(){
        $AllBlogs = Blog::where('is_active', 1)->get();
        $LatestBlogs = Blog::where('is_active', 1)->orderBy('id','DESC')->take(4)->get();
        $Categories = Category::where('is_active', 1)->get();
        return view('blog.all', compact('AllBlogs','LatestBlogs', 'Categories'));
    }
    public function getSingleBlog($id){
        $TheBlog = Blog::findOrFail($id);
        if(!$TheBlog){
            abort(404);
        }
        $Categories = Category::where('is_active', 1)->get();
        $LatestBlogs = Blog::where('is_active', 1)->orderBy('id','DESC')->take(4)->get();
        $Comments = Comment::where([
            'type'=> 'blog',
            'resource_id' => $TheBlog->id
        ])->get();
        return view('blog.single', compact('TheBlog', 'Categories', 'LatestBlogs', 'Comments'));
    }
    public function getAdminBlogs(){
        $AllBlogs = Blog::all();
        return view('admin.blog.all', compact('AllBlogs'));
    }
    public function getCreateBlog(){
        $AllCategories = Category::where('is_active', 1)->get();
        return view('admin.blog.new', compact('AllCategories'));
    }
    public function postCreateBlog(Request $r){
        $Rules = [
            'title' => 'required',
            'slug' => 'required',
            'image' => 'required|image|max:45000',
            'description' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $BlogData = $r->all();
            $BlogData['slug'] = str_replace('?' , '-' , strtolower(preg_replace("/[^A-Za-z0-9.!?]/" , '-' ,$BlogData['slug'])));
            if($r->has('image')){
                $img = ImageLib::make($r->image);
                // backup status
                $img->backup();
                $img->fit(1170, 500);
                $img->save('storage/app/blog/full_size/'.$BlogData['slug'].'.'.$r->image->getClientOriginalExtension());
                $BlogData['image'] = $BlogData['slug'].'.' . $r->image->getClientOriginalExtension();
            }
            // dd($r->small_image->getClientOriginalExtension());
            if($r->has('small_image')){
                $smallimg = ImageLib::make($r->small_image);
                // backup status
                $smallimg->backup();
                $smallimg->save('storage/app/blog/meduim_size/'.$BlogData['slug'].'.'.$r->small_image->getClientOriginalExtension());
                $BlogData['meduim_image'] = $BlogData['slug'].'.'.$r->small_image->getClientOriginalExtension();
                $smallimg->backup();
                $smallimg->fit(100, 100);
                $smallimg->save('storage/app/blog/small_size/'.$BlogData['slug'].'.'.$r->small_image->getClientOriginalExtension());
                $BlogData['small_image'] = $BlogData['slug'].'.'.$r->small_image->getClientOriginalExtension();
            }
            $BlogData['search_index'] = $r->title. ' '. $r->description. ' '.$r->content. ' '. $r->category_id.' '.$r->tag;
            Blog::create($BlogData);
            return redirect()->route('admin.blogs.all')->withSuccess("Blog Added Successfully");
        }
    }
    public function getEditBlog($id){
        $TheBlog = Blog::findOrFail($id);
        $AllCategories = Category::where('is_active', 1)->get();
        return view('admin.blog.edit', compact('AllCategories', 'TheBlog'));
    }
    public function postEditBlog(Request $r, $id){
        $TheBlog = Blog::findOrFail($id);
        $Rules = [
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $BlogData = $r->all();
            // dd($BlogData);
            $BlogData['slug'] =  $TheBlog->slug;
            $r->has('is_active') ? $BlogData['is_active'] = 1 : $BlogData['is_active'] = 0 ;
            $r->has('is_featured') ? $BlogData['is_featured'] = 1 : $BlogData['is_featured'] = 0 ;
                if($r->has('image')){
                    $img = ImageLib::make($r->image);
                    // backup status
                    $img->backup();
                    $img->fit(1170, 500);
                    $img->save('storage/app/blog/full_size/'.$BlogData['slug'].'.'.$r->image->getClientOriginalExtension());
                    $BlogData['image'] = $BlogData['slug'].'.'.$r->image->getClientOriginalExtension();
                }
                if($r->has('small_image')){
                    $smallimg = ImageLib::make($r->small_image);
                    // backup status
                    $smallimg->backup();
                    $smallimg->save('storage/app/blog/meduim_size/'.$BlogData['slug'].'.'.$r->small_image->getClientOriginalExtension());
                    $BlogData['meduim_image'] = $BlogData['slug'].'.'.$r->small_image->getClientOriginalExtension();
                    $smallimg->backup();
                    $smallimg->fit(100, 100);
                    $smallimg->save('storage/app/blog/small_size/'.$BlogData['slug'].'.'.$r->small_image->getClientOriginalExtension());
                    $BlogData['small_image'] = $BlogData['slug'].'.'.$r->small_image->getClientOriginalExtension();
                    $BlogData['category_id'] = 1;
                }
            $TheBlog->update($BlogData);
            return redirect()->route('admin.blogs.all')->withSuccess("Blog Updated Successfully");
        }
    }
    public function deleteBlog($id){
        Blog::findOrFail($id)->delete();
        return redirect()->route('admin.blogs.all')->withSuccess("Blog Deleted Successfully");
    }
    public function getSearch(Request $r){
        $SearchTerm = $r->search;
        $SearchTerm = preg_split('/\s+/', $SearchTerm, -1, PREG_SPLIT_NO_EMPTY);
        $AllBlogs = Blog::where('is_active', 1)->where(function($q) use ($SearchTerm){
            foreach($SearchTerm as $value)
            $q->where('search_index', 'LIKE', "%$value%");
        });
        $AllBlogs = $AllBlogs->get()->toJson();
        return view('blog.search', compact('AllBlogs'));
    }
}

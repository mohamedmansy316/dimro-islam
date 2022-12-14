<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Cookie;
use Alkoumi\LaravelHijriDate\Hijri;
use App\Models\Product;

    function getUserId(){
        if(auth()->check()){
            return auth()->user()->id;
        }else{
            if(Cookie::has('guest_id')){
            }else{
                Cookie::queue(Cookie::make('guest_id', md5(rand(1,500))));
            }
            //Get the cookie value
            return Cookie::get('guest_id');
        }
    }
    function FeaturedBlogs(){
        return Blog::where([
            'is_featured' => 1,
            'is_active' => 1,
        ])->orderBy('created_at', 'DESC')->take(3)->get();
    }
    function getCategories(){
        return Product::all();
    }
?>


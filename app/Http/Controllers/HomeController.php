<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Resource;
use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        $AllCategories = Category::where('type', 'main')->get();
        $AllBooks = Resource::where([
            'type' => 'book',
            'is_active'=> 1,
            'is_featured'=> 1,
        ])->take(10)->get();
        $AllAudios = Resource::where([
            'type' => 'audio',
            'is_active'=> 1,
            'is_featured'=> 1,
        ])->take(10)->get();
        $AllArticles = Resource::where([
            'type' => 'article',
            'is_active'=> 1,
            'is_featured'=> 1,
        ])->take(10)->get();
        $AllVideos = Resource::where([
            'type' => 'video',
            'is_active'=> 1,
            'is_featured'=> 1,
        ])->take(10)->get();
        return view('index', compact('AllCategories', 'AllBooks', 'AllAudios', 'AllArticles', 'AllVideos'));
    }
}

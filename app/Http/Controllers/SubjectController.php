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

class SubjectController extends Controller
{
    public function getAll(){
        $AllCategories = Category::where('type', 'main')->get();
        $AllBooks = Book::where('is_featured', 1)->take(10)->get();
        $AllAudios = Audio::where('is_featured', 1)->take(10)->get();
        $AllArticles = Article::where('is_featured', 1)->take(10)->get();
        $AllVideos = Video::where('is_featured', 1)->take(10)->get();
        $AllFatawas = Fatawa::where('is_featured', 1)->take(10)->get();
        return view('subjects.all', compact('AllCategories', 'AllBooks', 'AllAudios', 'AllArticles', 'AllVideos', 'AllFatawas'));
    }
}

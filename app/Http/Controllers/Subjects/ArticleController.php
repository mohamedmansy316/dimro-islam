<?php

namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Author;
use App\Models\Category;
use App\Models\Source;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Alkoumi\LaravelHijriDate\Hijri;
use App\Models\Comment;
use Illuminate\Support\Facades\File;
use Image as ImageLib;

class ArticleController extends Controller{
    public function getAllArticles(){
        $AllArticles = Article::all();
        return view('articles.all', compact('AllArticles'));
    }
    public function getSingleArticle($id){
        $AllArticles = Article::all();
        $TheArticle = Article::where('id', $id)->first();
        if(!$TheArticle){
            abort(404);
        }else{
            $Date = Hijri::Date('Y/m/d', $TheArticle->created_at);
            $Comments = Comment::where([
                'type'=> 'article',
                'resource_id' => $TheArticle->id
            ])->get();
            return view('articles.single', compact('TheArticle', 'Date', 'AllArticles', 'Comments'));
        }
    }
         // Articles Control Start
        public function getAdminArticles(){
            $AllArticles = Article::all();
            return view('admin.article.all', compact('AllArticles'));
        }
        public function getCreateArticle(){
            $AllAuthors = Author::where('is_active', 1)->get();
            $SubCategories = Category::where([
                'type' => 'sub',
                'is_active' => 1,
            ])->get();
            $AllSources = Source::where('is_active', 1)->get();
            return view('admin.article.new', compact('AllAuthors', 'SubCategories', 'AllSources'));
        }
        public function postCreateArticle(Request $r){
            $Rules =[
                'title' =>'required',
                'slug' =>'required|unique:articles',
                'description' =>'required',
                'content' =>'required',
                'category_id' =>'required',
                'file' =>'required|mimes:txt,pdf,docx',
            ];
            $Validator = Validator::make($r->all(), $Rules);
            if($Validator->fails()){
                return back()->withErrors($Validator->errors()->all());
            }else{
                $ArticleData = $r->all();
                if($r->has('file')){
                    $r->file->storeAs('public/articles',strtolower(str_replace(' ' , '-' ,$r->slug)).'.'.$r->file->getClientOriginalExtension());
                    $ArticleData['file'] = strtolower(str_replace(' ' , '-' ,$r->slug)).'.'.$r->file->getClientOriginalExtension();
                }
                if($r->has('image')){
                    $img = ImageLib::make($r->image);
                    // backup status
                    $img->backup();
                    // $img->fit(600, 600);
                    $img->save('storage/app/public/images/articles/'.$ArticleData['slug'].'.'.$r->image->getClientOriginalExtension());
                    $ArticleData['image'] = $ArticleData['slug'].'.'.$r->image->getClientOriginalExtension();
                }
                Article::create($ArticleData);
                return redirect()->route('admin.article.all')->withSuccess('Article created successfully');
            }
        }
        public function getEditArticle($id){
            $TheArticle = Article::where('id', $id)->first();
            $AllAuthors = Author::where('is_active', 1)->get();
            $MainCategories = Category::where([
                'type' => 'sub',
                'is_active' => 1,
            ])->get();
            $AllSources = Source::where('is_active', 1)->get();
            $ImageExsits = Storage::disk('public')->exists('images/articles/'. $TheArticle->image);
            $FileExsits = Storage::disk('public')->exists('articles/'. $TheArticle->file);
            // dd($exists);
            return view('admin.article.edit', compact('TheArticle' ,'AllAuthors', 'MainCategories', 'AllSources', 'ImageExsits', 'FileExsits'));
        }
        public function postEditArticle(Request $r, $id){
            $TheArticle = Article::where('id', $id)->first();
            $Rules =[
                'title' =>'required',
                'description' =>'required',
                'content' =>'required',
                'category_id' =>'required',
                'file' =>'mimes:txt,pdf,docx',
            ];
            $Validator = Validator::make($r->all(), $Rules);
            if($Validator->fails()){
                return back()->withErrors($Validator->errors()->all());
            }else{
                $ArticleData = $r->all();
                $ArticleData['slug'] = $TheArticle->slug;
                $r->has('is_active') ? $ArticleData['is_active'] = 1 : $ArticleData['is_active'] = 0 ;
                $r->has('is_featured') ? $ArticleData['is_featured'] = 1 : $ArticleData['is_featured'] = 0 ;
                if($r->has('file')){
                    $r->file->storeAs('public/articles',strtolower(str_replace(' ' , '-' ,$ArticleData['slug'])).'.'.$r->file->getClientOriginalExtension());
                    $ArticleData['file'] = strtolower(str_replace(' ' , '-' ,$ArticleData['slug'])).'.'.$r->file->getClientOriginalExtension();
                }
                if($r->has('image')){
                    $img = ImageLib::make($r->image);
                    // backup status
                    $img->backup();
                    // $img->fit(600, 600);
                    $img->save('storage/app/public/images/articles/'.$ArticleData['slug'].'.'.$r->image->getClientOriginalExtension());
                    $ArticleData['image'] = $ArticleData['slug'].'.'.$r->image->getClientOriginalExtension();
                }
                if($TheArticle->file){
                    // dd($TheArticle->file);
                    Storage::disk('local')->delete('app/public/articles/'.$TheArticle->file);
                }
                $TheArticle->update($ArticleData);
                return redirect()->route('admin.article.all')->withSuccess('Article updated successfully');
            }
        }
        public function deleteArticle($id){
            $TheArticle = Article::where('id', $id)->first();
            if($TheArticle->file){
                Storage::disk('local')->delete('public/articles/'.$TheArticle->file);
            }
            $TheArticle->delete();
            return redirect()->back()->withSuccess('Article deleted successfully');
        }
}

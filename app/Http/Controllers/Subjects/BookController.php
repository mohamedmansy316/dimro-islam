<?php

namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Source;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Alkoumi\LaravelHijriDate\Hijri;
use App\Models\Comment;
use Image as ImageLib;
class BookController extends Controller{
    public function getAllBooks(){
        $AllBooks = Book::all();
        return view('book.all', compact('AllBooks'));
    }
    public function getSingleBook($id){
        $AllBooks = Book::all();
        $TheBook = Book::where('id', $id)->first();
        if(!$TheBook){
            abort(404);
        }else{
            $Date = Hijri::Date('Y/m/d', $TheBook->created_at);
            $Comments = Comment::where([
                'type'=> 'book',
                'resource_id' => $TheBook->id
            ])->get();
            // dd($Comments);
            return view('book.single', compact('TheBook', 'Date', 'AllBooks', 'Comments'));
        }
    }
       // Books Control Start
    public function getAdminBooks(){
        $AllBooks = Book::all();
        return view('admin.book.all', compact('AllBooks'));
    }
    public function getCreateBook(){
        $AllAuthors = Author::where('is_active', 1)->get();
        $SubCategories = Category::where([
            'type' => 'sub',
            'is_active' => 1,
        ])->get();
        $AllSources = Source::where('is_active', 1)->get();
        return view('admin.book.new', compact('AllAuthors', 'SubCategories', 'AllSources'));
    }
    public function postCreateBook(Request $r){
        $Rules =[
            'title' =>'required',
            'slug' =>'required|unique:books',
            'description' =>'required',
            'content' =>'required',
            'category_id' =>'required',
            'file' =>'required|mimes:txt,pdf,docx',
            'image' =>'mimes:png,jpg,jpeg,webp',
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $BookData = $r->all();
            if($r->has('file')){
                $r->file->storeAs('public/books',strtolower(str_replace(' ' , '-' ,$r->slug)).'.'.$r->file->getClientOriginalExtension());
                $BookData['file'] = strtolower(str_replace(' ' , '-' ,$r->slug)).'.'.$r->file->getClientOriginalExtension();
            }
            if($r->has('image')){
                $img = ImageLib::make($r->image);
                // backup status
                $img->backup();
                $img->fit(600, 600);
                $img->save('storage/app/public/images/books/'.$BookData['slug'].'.'.$r->image->getClientOriginalExtension());
                $BookData['image'] = $BookData['slug'].'.'.$r->image->getClientOriginalExtension();
            }
            Book::create($BookData);
            return redirect()->route('admin.book.all')->withSuccess('Book created successfully');
        }
    }
    public function getEditBook($id){
        $TheBook = Book::where('id', $id)->first();
        $AllAuthors = Author::where('is_active', 1)->get();
        $MainCategories = Category::where([
            'type' => 'sub',
            'is_active' => 1,
        ])->get();
        $AllSources = Source::where('is_active', 1)->get();
        return view('admin.book.edit', compact('TheBook' ,'AllAuthors', 'MainCategories', 'AllSources'));
    }
    public function postEditBook(Request $r, $id){
        $TheBook = Book::where('id', $id)->first();
        $Rules =[
            'title' =>'required',
            'description' =>'required',
            'content' =>'required',
            'category_id' =>'required',
            'file' =>'mimes:txt,pdf,docx',
            'image' =>'mimes:png,jpg,jpeg,webp',
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $BookData = $r->all();
            $BookData['slug'] = $TheBook->slug;
            $r->has('is_active') ? $BookData['is_active'] = 1 : $BookData['is_active'] = 0 ;
            $r->has('is_featured') ? $BookData['is_featured'] = 1 : $BookData['is_featured'] = 0 ;
            if($r->has('file')){
                $r->file->storeAs('public/books',strtolower(str_replace(' ' , '-' ,$BookData['slug'])).'.'.$r->file->getClientOriginalExtension());
                $BookData['file'] = strtolower(str_replace(' ' , '-' ,$BookData['slug'])).'.'.$r->file->getClientOriginalExtension();
            }
            if($TheBook->file){
                // dd($TheBook->file);
                Storage::disk('local')->delete('app/public/books/'.$TheBook->file);
            }
            if($r->has('image')){
                $img = ImageLib::make($r->image);
                // backup status
                $img->backup();
                $img->fit(600, 600);
                $img->save('storage/app/public/images/books/'.$BookData['slug'].'.'.$r->image->getClientOriginalExtension());
                $BookData['image'] = $BookData['slug'].'.'.$r->image->getClientOriginalExtension();
            }
            // $OldImage = Storage::url('app/public/images/books/'.$TheBook->image);
            // if($OldImage){
            //     Storage::disk('local')->delete('app/public/images/books/'.$TheBook->image);
            // }
            $TheBook->update($BookData);
            return redirect()->route('admin.book.all')->withSuccess('Book updated successfully');
        }
    }
    public function deleteBook($id){
        $TheBook = Book::findOrFail($id);
        if($TheBook->file){
            Storage::disk('local')->delete('public/books/'.$TheBook->file);
        }
        $TheBook->delete();
        return redirect()->route('admin.book.all')->withSuccess('Book deleted successfully');
    }
}

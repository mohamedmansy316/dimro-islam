<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller{
    public function getAllAuthors(){
        $AllAuthors = Author::all();
        return view('admin.author.all', compact('AllAuthors'));
    }
    public function getCreateAuthor(){
        return view('admin.author.new');
    }
    public function postCreateAuthor(Request $r){
        $Rules =[
            'name' =>'required',
            'slug' =>'required|unique:authors',
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $AuthorData = $r->all();
            $AuthorData['is_active'] = 1;
            Author::create($AuthorData);
            return redirect()->route('admin.author.all')->withSuccess('Author added successfully');
        }
    }
    public function getEditAuthor($id){
        $TheAuthor = Author::where('id', $id)->first();
        return view('admin.author.edit', compact('TheAuthor'));
    }
    public function postEditAuthor(Request $r, $id){
        $TheAuthor = Author::findOrFail($id);
        $Rules =[
            'name' =>'required',
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $AuthorData = $r->all();
            $r->has('is_active') ? $AuthorData['is_active'] = 1 : $AuthorData['is_active'] = 0 ;
            $TheAuthor->update($AuthorData);
            return redirect()->route('admin.author.all')->withSuccess('Author updated successfully');
        }
    }
    public function deleteAuthor($id){
        Author::findOrFail($id)->delete();
        return redirect()->route('admin.author.all')->withSuccess('Author deleted successfully');

    }
}

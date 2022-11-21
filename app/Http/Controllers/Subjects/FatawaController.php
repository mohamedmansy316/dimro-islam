<?php

namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\Fatawa;
use App\Models\Source;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FatawaController extends Controller
{
         // Fatawas Control Start
        public function getAllFatawas(){
            $AllFatawas = Fatawa::all();
            return view('admin.fatawa.all', compact('AllFatawas'));
        }
        public function getCreateFatawa(){
            $AllAuthors = Author::where('is_active', 1)->get();
            $SubCategories = Category::where([
                'type' => 'sub',
                'is_active' => 1,
            ])->get();
            $AllSources = Source::where('is_active', 1)->get();
            return view('admin.fatawa.new', compact('AllAuthors', 'SubCategories', 'AllSources'));
        }
        public function postCreateFatawa(Request $r){
            $Rules =[
                'title' =>'required',
                'slug' =>'required|unique:fatawas',
                'description' =>'required',
                'content' =>'required',
                'category_id' =>'required',
                'file' =>'required|mimes:txt,pdf,docx',
            ];
            $Validator = Validator::make($r->all(), $Rules);
            if($Validator->fails()){
                return back()->withErrors($Validator->errors()->all());
            }else{
                $FatawaData = $r->all();
                if($r->has('file')){
                    $r->file->storeAs('public/fatawa',strtolower(str_replace(' ' , '-' ,$r->slug)).'.'.$r->file->getClientOriginalExtension());
                    $FatawaData['file'] = strtolower(str_replace(' ' , '-' ,$r->slug)).'.'.$r->file->getClientOriginalExtension();
                }
                Fatawa::create($FatawaData);
                return redirect()->route('admin.fatawa.all')->withSuccess('Fatawa created successfully');
            }
        }
        public function getEditFatawa($id){
            $TheFatwa = Fatawa::where('id', $id)->first();
            $AllAuthors = Author::where('is_active', 1)->get();
            $MainCategories = Category::where([
                'type' => 'sub',
                'is_active' => 1,
            ])->get();
            $AllSources = Source::where('is_active', 1)->get();
            return view('admin.fatawa.edit', compact('TheFatwa' ,'AllAuthors', 'MainCategories', 'AllSources'));
        }
        public function postEditFatawa(Request $r, $id){
            $TheFatwa = Fatawa::findOrFail($id);
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
                $FatawaData = $r->all();
                $FatawaData['slug'] = $TheFatwa->slug;
                $r->has('is_active') ? $FatawaData['is_active'] = 1 : $FatawaData['is_active'] = 0 ;
                $r->has('is_featured') ? $FatawaData['is_featured'] = 1 : $FatawaData['is_featured'] = 0 ;
                if($r->has('file')){
                    $r->file->storeAs('public/fatawa',strtolower(str_replace(' ' , '-' ,$FatawaData['slug'])).'.'.$r->file->getClientOriginalExtension());
                    $FatawaData['file'] = strtolower(str_replace(' ' , '-' ,$FatawaData['slug'])).'.'.$r->file->getClientOriginalExtension();
                }
                if($TheFatwa->file){
                    // dd($TheFatwa->file);
                    Storage::disk('local')->delete('app/public/fatawa/'.$TheFatwa->file);
                }
                $TheFatwa->update($FatawaData);
                return redirect()->route('admin.fatawa.all')->withSuccess('Fatawa updated successfully');
            }
        }
        public function deleteFatawa($id){
            $TheFatwa = Fatawa::findOrFail($id);
            if($TheFatwa->file){
                Storage::disk('local')->delete('public/fatawa/'.$TheFatwa->file);
            }
            $TheFatwa->delete();
            return redirect()->route('admin.fatawa.all')->withSuccess('Fatawa deleted successfully');
        }
}

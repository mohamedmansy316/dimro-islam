<?php

namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;
use App\Models\Audio;
use App\Models\Author;
use App\Models\Category;
use App\Models\Source;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Alkoumi\LaravelHijriDate\Hijri;
use App\Models\Comment;
use Image as ImageLib;

class AudioController extends Controller{
    public function getAllAudios(){
        $AllAudios = Audio::all();
        return view('audios.all', compact('AllAudios'));
    }
    public function getSingleAudio($id){
        $AllAudios = Audio::all();
        $TheAudio = Audio::where('id', $id)->first();
        if(!$TheAudio){
            abort(404);
        }else{
            $Date = Hijri::Date('Y/m/d', $TheAudio->created_at);
            $Comments = Comment::where([
                'type'=> 'audio',
                'resource_id' => $TheAudio->id
            ])->get();
            return view('audios.single', compact('TheAudio', 'Date', 'AllAudios', 'Comments'));
        }
    }
          // Audios Control Start
        public function getAdminAudios(){
            $AllAudios = Audio::all();
            return view('admin.audio.all', compact('AllAudios'));
        }
        public function getCreateAudio(){
            $AllAuthors = Author::where('is_active', 1)->get();
            $SubCategories = Category::where([
                'type' => 'sub',
                'is_active' => 1,
            ])->get();
            $AllSources = Source::where('is_active', 1)->get();
            return view('admin.audio.new', compact('AllAuthors', 'SubCategories', 'AllSources'));
        }
        public function postCreateAudio(Request $r){
            $Rules =[
                'title' =>'required',
                'slug' =>'required|unique:audio',
                'description' =>'required',
                'content' =>'required',
                'category_id' =>'required',
                'file' =>'required|mimes:mp3,wav',
                'image' =>'mimes:png,jpg,jpeg,webp',
            ];
            $Validator = Validator::make($r->all(), $Rules);
            if($Validator->fails()){
                return back()->withErrors($Validator->errors()->all());
            }else{
                $AudioData = $r->all();
                if($r->has('file')){
                    $r->file->storeAs('public/audios',strtolower(str_replace(' ' , '-' ,$r->slug)).'.'.$r->file->getClientOriginalExtension());
                    $AudioData['file'] = strtolower(str_replace(' ' , '-' ,$r->slug)).'.'.$r->file->getClientOriginalExtension();
                }
                if($r->has('image')){
                    $img = ImageLib::make($r->image);
                    // backup status
                    $img->backup();
                    $img->fit(350, 350);
                    $img->save('storage/app/public/images/audios/'.$AudioData['slug'].'.'.$r->image->getClientOriginalExtension());
                    $AudioData['image'] = $AudioData['slug'].'.'.$r->image->getClientOriginalExtension();
                }
                Audio::create($AudioData);
                return redirect()->route('admin.audio.all')->withSuccess('Audio created successfully');
            }
        }
        public function getEditAudio($id){
            $TheAudio = Audio::where('id', $id)->first();
            $AllAuthors = Author::where('is_active', 1)->get();
            $MainCategories = Category::where([
                'type' => 'sub',
                'is_active' => 1,
            ])->get();
            $AllSources = Source::where('is_active', 1)->get();
            return view('admin.audio.edit', compact('TheAudio' ,'AllAuthors', 'MainCategories', 'AllSources'));
        }
        public function postEditAudio(Request $r, $id){
            $TheAudio = Audio::where('id', $id)->first();
            $Rules =[
                'title' =>'required',
                'description' =>'required',
                'content' =>'required',
                'category_id' =>'required',
                'file' =>'mimes:mp3,wav',
                'image' =>'mimes:png,jpg,jpeg,webp',
            ];
            $Validator = Validator::make($r->all(), $Rules);
            if($Validator->fails()){
                return back()->withErrors($Validator->errors()->all());
            }else{
                $AudioData = $r->all();
                $AudioData['slug'] = $TheAudio->slug;
                $r->has('is_active') ? $AudioData['is_active'] = 1 : $AudioData['is_active'] = 0 ;
                $r->has('is_featured') ? $AudioData['is_featured'] = 1 : $AudioData['is_featured'] = 0 ;
                if($r->has('file')){
                    $r->file->storeAs('public/audios',strtolower(str_replace(' ' , '-' ,$AudioData['slug'])).'.'.$r->file->getClientOriginalExtension());
                    $AudioData['file'] = strtolower(str_replace(' ' , '-' ,$AudioData['slug'])).'.'.$r->file->getClientOriginalExtension();
                }
                // if($TheAudio->file){
                //     // dd($TheAudio->file);
                //     Storage::disk('local')->delete('app/public/audios/'.$TheAudio->file);
                // }
                if($r->has('image')){
                    $img = ImageLib::make($r->image);
                    // backup status
                    $img->backup();
                    $img->fit(350, 350);
                    $img->save('storage/app/public/images/audios/'.$AudioData['slug'].'.'.$r->image->getClientOriginalExtension());
                    $AudioData['image'] = $AudioData['slug'].'.'.$r->image->getClientOriginalExtension();
                }
                $TheAudio->update($AudioData);
                return redirect()->route('admin.audio.all')->withSuccess('Audio updated successfully');
            }
        }
        public function deleteAudio($id){
            $TheAudio = Audio::findOrFail($id);
            if($TheAudio->file){
                Storage::disk('local')->delete('public/audios/'.$TheAudio->file);
            }
            $TheAudio->delete();
            return redirect()->route('admin.audio.all')->withSuccess('Audio deleted successfully');
        }
}

<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Resource;
use App\Models\Category;
use App\Models\Source;
use Illuminate\Support\Facades\Storage;
use Image as ImageLib;

use Illuminate\Support\Facades\Validator;

class ResourceController extends Controller{
    public function getAll(){
        $AllCategories = Category::where('type', 'main')->get();
        $AllBooks = Resource::where([
            'type' => 'book',
            'is_active'=> 1,
        ])->take(10)->get();
        $AllAudios = Resource::where([
            'type' => 'audio',
            'is_active'=> 1,
        ])->take(10)->get();
        $AllArticles = Resource::where([
            'type' => 'article',
            'is_active'=> 1,
        ])->take(10)->get();
        $AllVideos = Resource::where([
            'type' => 'video',
            'is_active'=> 1,
        ])->take(10)->get();
        $AllFatawas = Resource::where([
            'type' => 'fatwa',
            'is_active'=> 1,
        ])->take(10)->get();
        return view('subjects.all', compact('AllCategories', 'AllBooks', 'AllAudios', 'AllArticles', 'AllVideos', 'AllFatawas'));
    }
    public function getAllResources($type){
        $AllResources = Resource::where('type', $type)->get();
        $type = $type;
        return view('admin.resource.all', compact('AllResources', 'type'));
    }
    public function getCreateResource($type){
        $AllAuthors = Author::where('is_active', 1)->get();
        $SubCategories = Category::where([
            'type' => 'sub',
            'is_active' => 1,
        ])->get();
        $AllSources = Source::where('is_active', 1)->get();
        $type = $type;
        return view('admin.resource.new', compact('AllAuthors', 'SubCategories', 'AllSources', 'type'));
    }
    public function postCreateResource(Request $r, $type){
        $Rules =[
            'title' =>'required',
            'slug' =>'required|unique:resources',
            'description' =>'required',
            'content' =>'required',
            'type' =>'required|in:audio,video,article,book,fatwa',
            'category_id' =>'required',
            'image' =>'mimes:png,jpg,jpeg,webp',
        ];
        if($type == 'video'){
            $Rules =[
                'url' => 'required',
            ];
        }elseif($type == 'book' || $type == 'article'){
            $Rules =[
                'file' =>'mimes:txt,pdf,docx',
            ];
        }
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $ResourceData = $r->all();
            // dd($ResourceData);
            if($r->has('file')){
                $FileSize = $r->file->getSize();
                if($FileSize > 10000000){
                    return back()->withErrors('file size must be lower than 10 MB');
                }
                $r->file->storeAs('app/public/files',strtolower(str_replace(' ' , '-' ,$r->slug)).'.'.$r->file->getClientOriginalExtension());
                $ResourceData['file'] = strtolower(str_replace(' ' , '-' ,$r->slug)).'.'.$r->file->getClientOriginalExtension();
            }
            if($r->has('image')){
                $img = ImageLib::make($r->image);
                // backup status
                $img->backup();
                $img->fit(600, 600);
                $img->save('storage/app/public/images/'.$ResourceData['slug'].'.'.$r->image->getClientOriginalExtension());
                $ResourceData['image'] = $ResourceData['slug'].'.'.$r->image->getClientOriginalExtension();
            }
            Resource::create($ResourceData);
            return redirect()->route('admin.resource.all', $type)->withSuccess($type .' '. 'added successfully');
        }
    }
    public function getEditResource($id, $type){
        $TheResource = Resource::findOrFail($id);
        $AllAuthors = Author::where('is_active', 1)->get();
        $SubCategories = Category::where([
            'type' => 'sub',
            'is_active' => 1,
        ])->get();
        $AllSources = Source::where('is_active', 1)->get();
        $type = $type;
        if (Storage::exists(public_path('files/'.$TheResource->file))) {
            $filesExist = 'yes';
        }else{
            $filesExist = 'no';
        }
        if (Storage::exists(public_path('images/'.$TheResource->image))) {
            $imageExist = 'yes';
        }else{
            $imageExist = 'no';
        }
        return view('admin.resource.edit', compact('TheResource' ,'AllAuthors', 'SubCategories', 'AllSources', 'type', 'filesExist', 'imageExist'));
    }
    public function postEditResource(Request $r, $id, $type){
        $TheResource = Resource::findOrFail($id);
        $Rules =[
            'title' =>'required',
            'description' =>'required',
            'content' =>'required',
            'type' =>'required|in:audio,video,article,book',
            'category_id' =>'required',
        ];
        if($type == 'video'){
            $Rules =[
                'url' => 'required',
            ];
        }elseif($type == 'book' || $type == 'article'){
            $Rules =[
                'file' =>'mimes:txt,pdf,docx',
            ];
        }
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $ResourceData = $r->all();
            $ResourceData['slug'] = $TheResource->slug;
            $r->has('is_active') ? $ResourceData['is_active'] = 1 : $ResourceData['is_active'] = 0 ;
            $r->has('is_featured') ? $ResourceData['is_featured'] = 1 : $ResourceData['is_featured'] = 0 ;
            if($r->has('file')){
                $FileSize = $r->file->getSize();
                if($FileSize > 1000000){
                    return back()->withErrors('The file size must be lower than 10 MB');
                }
                $r->file->storeAs('public/files',strtolower(str_replace(' ' , '-' ,$TheResource->slug)).'.'.$r->file->getClientOriginalExtension());
                $ResourceData['file'] = strtolower(str_replace(' ' , '-' ,$TheResource->slug)).'.'.$r->file->getClientOriginalExtension();
            }
            if($r->has('image')){
                $img = ImageLib::make($r->image);
                // backup status
                $img->backup();
                $img->fit(600, 600);
                $img->save('storage/app/public/images/'.$ResourceData['slug'].'.'.$r->image->getClientOriginalExtension());
                $ResourceData['image'] = $ResourceData['slug'].'.'.$r->image->getClientOriginalExtension();
            }
            $TheResource->update($ResourceData);
            return redirect()->route('admin.resource.all', $type)->withSuccess($type .' '. 'updated successfully');
        }
    }
    public function deleteResource($id, $type){
        $TheResource = Resource::findOrFail($id);
        if($TheResource->file){
            Storage::disk('local')->delete('app/public/files/'.$TheResource->file);
        }
        $TheResource->delete();
        return redirect()->route('admin.resource.all', $type)->withSuccess($type .' '. 'deleted successfully');
    }
}

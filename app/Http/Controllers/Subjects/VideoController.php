<?php

namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use App\Models\Source;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Alkoumi\LaravelHijriDate\Hijri;
use App\Models\Comment;
use Image as ImageLib;

class VideoController extends Controller{
    public function getAllVideos(){
        $AllVideos = Video::all();
        return view('videos.all', compact('AllVideos'));
    }
    public function getSingleVideo($id){
        $AllVideos = Video::all();
        $TheVideo = Video::where('id', $id)->first();
        if(!$TheVideo){
            abort(404);
        }else{
            $Date = Hijri::Date('Y/m/d', $TheVideo->created_at);
            $Comments = Comment::where([
                'type'=> 'video',
                'resource_id' => $TheVideo->id
            ])->get();
            return view('videos.single', compact('TheVideo', 'Date', 'AllVideos', 'Comments'));
        }
    }
    // Videos Control Start
    public function getAdminVideos(){
        $AllVideos = Video::all();
        return view('admin.video.all', compact('AllVideos'));
    }
    public function getCreateVideo(){
        $AllAuthors = Author::where('is_active', 1)->get();
        $SubCategories = Category::where([
            'type' => 'sub',
            'is_active' => 1,
        ])->get();
        $AllSources = Source::where('is_active', 1)->get();
        return view('admin.video.new', compact('AllAuthors', 'SubCategories', 'AllSources'));
    }
    public function postCreateVideo(Request $r){
        $Rules =[
            'title' =>'required',
            'slug' =>'required|unique:videos',
            'description' =>'required',
            'content' =>'required',
            'category_id' =>'required',
            'link' =>'required',
            'image' =>'mimes:png,jpg,jpeg,webp',
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $VideoData = $r->all();
            if($r->has('image')){
                $img = ImageLib::make($r->image);
                // backup status
                $img->backup();
                // $img->fit(600, 600);
                $img->save('storage/app/public/images/videos/'.$VideoData['slug'].'.'.$r->image->getClientOriginalExtension());
                $VideoData['image'] = $VideoData['slug'].'.'.$r->image->getClientOriginalExtension();
            }
            Video::create($VideoData);
            return redirect()->route('admin.video.all')->withSuccess('Video created successfully');
        }
    }
    public function getEditVideo($id){
        $TheVideo = Video::where('id', $id)->first();
        $AllAuthors = Author::where('is_active', 1)->get();
        $MainCategories = Category::where([
            'type' => 'sub',
            'is_active' => 1,
        ])->get();
        $AllSources = Source::where('is_active', 1)->get();
        return view('admin.video.edit', compact('TheVideo' ,'AllAuthors', 'MainCategories', 'AllSources'));
    }
    public function postEditVideo(Request $r, $id){
        $TheVideo = Video::where('id', $id)->first();
        $Rules =[
            'title' =>'required',
            'description' =>'required',
            'content' =>'required',
            'category_id' =>'required',
            'link' =>'required',
            'image' =>'mimes:png,jpg,jpeg,webp',
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $VideoData = $r->all();
            $VideoData['slug'] = $TheVideo->slug;
            $r->has('is_active') ? $VideoData['is_active'] = 1 : $VideoData['is_active'] = 0 ;
            $r->has('is_featured') ? $VideoData['is_featured'] = 1 : $VideoData['is_featured'] = 0 ;
            if($r->has('image')){
                $img = ImageLib::make($r->image);
                // backup status
                $img->backup();
                $img->save('storage/app/public/images/videos/'.$VideoData['slug'].'.'.$r->image->getClientOriginalExtension());
                $VideoData['image'] = $VideoData['slug'].'.'.$r->image->getClientOriginalExtension();
            }
            $TheVideo->update($VideoData);
            return redirect()->route('admin.video.all')->withSuccess('Video updated successfully');
        }
    }
    public function deleteVideo($id){
        $TheVideo = Video::findOrFail($id);
        if($TheVideo->file){
            Storage::disk('local')->delete('public/videos/'.$TheVideo->file);
        }
        $TheVideo->delete();
        return redirect()->route('admin.video.all')->withSuccess('Video deleted successfully');
    }
}

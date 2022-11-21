<?php

namespace App\Http\Controllers;

use App\Models\Source;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SourceController extends Controller
{
    public function getAllSources(){
        $AllSources = Source::all();
        return view('admin.source.all', compact('AllSources'));
    }
    public function getCreateSource(){
        return view('admin.source.new');
    }
    public function postCreateSource(Request $r){
        $Rules =[
            'title' =>'required',
            'slug' =>'required|unique:sources',
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $SourceData = $r->all();
            Source::create($SourceData);
            return redirect()->route('admin.source.all')->withSuccess('Source added successfully');
        }
    }
    public function getEditSource($id){
        $TheSource = Source::findOrFail($id);
        return view('admin.source.edit', compact('TheSource'));
    }
    public function postEditSource(Request $r, $id){
        $TheSource = Source::findOrFail($id);
        $Rules =[
            'title' =>'required',
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $SourceData = $r->all();
            $r->has('is_active') ? $SourceData['is_active'] = 1 : $SourceData['is_active'] = 0 ;
            $TheSource->update($SourceData);
            return redirect()->route('admin.source.all')->withSuccess('Source updated successfully');
        }
    }
    public function deleteSource($id){
        Source::findOrFail($id)->delete();
        return redirect()->route('admin.source.all')->withSuccess('Source deleted successfully');

    }
}

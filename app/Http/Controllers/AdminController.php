<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Source;
use App\Models\Stream;
use App\Models\Subject;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Spatie\GoogleCalendar\Event;


class AdminController extends Controller{
    public function getIndex(){
        return view('admin.index');
    }
    public function getAllCalendars(){
        $allEvents = Event::get();
        // dd($allEvents);
        return view('admin.calender.all', compact('allEvents'));
    }
    public function getCreateEvent(){
        return view('admin.calender.new');
    }
    public function postCreateEvent(Request $r){
        $startTime = Carbon::parse($r->input('start_date') . ' ' .$r->input('start_time'), 'Africa/Cairo');
        $endTime = Carbon::parse($r->input('end_date') . ' ' .$r->input('end_time'), 'Africa/Cairo');
        Event::create([
            'name' => $r->input('name'),
            'startDateTime' => $startTime,
            'endDateTime' => $endTime,
            'description' => $r->description,
        ]);
        return redirect()->route('admin.calender.index')->withSuccess('Event Created');
    }
    public function getEditEvent($id){
        $TheEvent = Event::find($id);
        if(!$TheEvent){
            abort(404);
        }
        return view('admin.calender.edit', compact('TheEvent'));
    }
    public function postEditEvent(Request $r, $id){
        $TheEvent = Event::find($id);
        if(!$TheEvent){
            abort(404);
        }
        $startTime = Carbon::parse($r->input('start_date') . ' ' .$r->input('start_time'), 'Africa/Cairo');
        $endTime = Carbon::parse($r->input('end_date') . ' ' .$r->input('end_time'), 'Africa/Cairo');
        $TheEvent->update([
            'name' => $r->name,
            'startDateTime' => $startTime,
            'endDateTime' => $endTime,
            'description' => $r->description,
        ]);
        return redirect()->route('admin.calender.index')->withSuccess('Event Updated');

    }
    public function deleteEvent($id){
        $TheEvent = Event::find($id);
        if(!$TheEvent){
            abort(404);
        }
        $TheEvent->delete();
        return redirect()->route('admin.calender.index')->withSuccess('Event Deleted');

    }
    public function getAdminContacts(){
        $AllMessages = Contact::all();
        return view('admin.contacts.all', compact('AllMessages'));
    }
    public function getShowContact($id){
        $Contact = Contact::find($id);
        if(!$Contact){
            return back()->with('error', 'Message not found');
        }
        return view('admin.contacts.details', compact('Contact'));
    }
    public function deleteContact($id){
        Contact::findOrFail($id)->delete();
        return redirect()->route('admin.contacts.all')->withSuccess("Message Deleted Successfully");
    }

    //Start Streams Code
    public function getAdminStreams(){
        $AllStreams = Stream::all();
        return view('admin.stream.all', compact('AllStreams'));
    }
    public function getCreateStream(){
        return view('admin.stream.new');
    }
    public function postCreateStream(Request $r){
        $Rules =[
            'title' =>'required',
            'link' =>'required',
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $VideoData = $r->all();
            Stream::create($VideoData);
            return redirect()->route('admin.stream.all')->withSuccess('Video added successfully');
        }
    }
    public function getEditStream($id){
        $TheVideo = Stream::where('id', $id)->first();
        return view('admin.stream.edit', compact('TheVideo'));
    }
    public function postEditStream(Request $r, $id){
        $TheVideo = Stream::where('id', $id)->first();
        $Rules =[
            'title' =>'required',
            'link' =>'required',
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }else{
            $VideoData = $r->all();
            $TheVideo->update($VideoData);
            return redirect()->route('admin.stream.all')->withSuccess('Video updated successfully');
        }
    }
}

<?php

namespace App\Http\Controllers;
use Sheets;
use App\Models\Blog;
use Validator;
use App\Models\Contact;
use App\Models\Stream;
use Illuminate\Http\Request;

class PagesController extends Controller{
    public function getAbout(){
        return view('static.about');
    }
    public function getContact(){
        return view('static.contact');
    }
    public function getCalendar(){
        return view('static.calendar');
    }
    public function getStreams(){
        $AllVideos = Stream::all();
        return view('static.stream', compact('AllVideos'));
    }
    public function postContact(Request $r){
        //Validate the request
        $Rules = [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
            return response($Validator->errors()->first() , 400);
        }else{
            $FormData = $r->except('_token');
            $FormData['Date'] = date('Y-m-d');
            try {
                Sheets::spreadsheet(env('POST_SPREADSHEET_ID'))->sheet('Responses')->append([$FormData]);
                Contact::create($FormData);
            } catch (\Exception $e) {

                //   return $e->getMessage();
                    return response()->json(['data' => $e->getMessage()]);
            }
            return response()->json(['data' => 'Your message has been sent!', 'sentData' => $FormData]);
        }
    }

}

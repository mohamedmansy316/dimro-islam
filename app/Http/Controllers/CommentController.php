<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use App\Models\Blog;
use App\Models\Comment;
class CommentController extends Controller
{
    public function postComment(Request $r, $id, $resource){
        // $TheBlog = Blog::find($id);
        // if(!$TheBlog){
        //     return back()->withErrors('Blog has been deleted', 404);
        // }
        $Rules = [
            'name' => 'required|min:3|max:20',
            'email' => 'required|email',
            'subject' => 'required',
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }
        if(auth()->check()){

            $UserId = auth()->user()->id;
            $CommentData = $r->all();
            $CommentData['user_id'] = $UserId;
            $CommentData['resource_id'] = $id;
            $CommentData['type'] = $resource;
            // dd($CommentData);
            Comment::create($CommentData);
            // return back()->withSuccess('Your Comment has benn sent, Thank you');
            return  redirect()->back()->with('message','Action completed Successfully');
        }
        else{
            return back()->withErrors('You are not logged in', 500);
        }
    }
    public function getAdminComments(){
        $Blogs = Blog::where('is_active', 1)->get();
        return view('admin.comments.all', compact('Blogs'));
    }
    public function getShowBlogComments($id){
        $TheBlog = Blog::find($id);
        if(!$TheBlog){
            abort(404);
        }
        $AllComments = Comment::where('blog_id', $id)->get();
        return view('admin.comments.single', compact('TheBlog', 'AllComments'));
    }
    public function getActivateComment($id){
        $TheComment = Comment::where('id', $id)->first();
        if(!$TheComment){
            return back()->withErrors('Comment not found');
        }
        Comment::where('id', $id)->update(array('approved' => 1));
        return back()->withSuccess('Comment Activated');
    }
    public function deleteComment($id){
        $TheComment = Comment::findOrFail($id)->delete();
        return back()->withSuccess('Comment has deleted');
    }

}

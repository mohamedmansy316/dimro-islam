<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;


class UserController extends Controller{
    public function getRegister(){
        return view('auth.register');
    }
    public function postRegister(Request $r){
        $Rules = [
            'name' => 'required|min:3|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:5',
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if($Validator->fails()){
            return back()->withErrors($Validator->errors()->all());
        }
        else{
            $UserData = $r->except('password_confirmation', '_token');
            $UserData['password'] = Hash::make($r->password);
            $UserData['code'] = mt_rand(100000, 999999);
            $UserData['active'] = 1;
            $NewUser = User::create($UserData);
            Auth::loginUsingId($NewUser->id);
            return redirect()->route('index')->withSuccesss('Your are now logged in as ' . $NewUser->name);

        }
    }
    public function getLogin(){
        return view('auth.register');
    }
    public function postLogin(Request $r){
        //Validate the request
        $Rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if ($Validator->fails()) {
            return back()->withErrors($Validator->errors()->all());
        } else {
            //Attempt to login
            if (Auth::attempt($r->except('_token'))) {
                    return redirect()->route('index');
            } else {
                return back()->withErrors('This information dose not match our records');
            }
        }
    }
    public function logout(){
        if (auth()->check()) {
            Auth::logout();
            return redirect()->route('index')->withSuccess('You have successfully logged out');
        } else {
            return redirect()->route('index')->withSuccess('You are already logged out');
        }
    }
    public function redirectToProvider($provider){

        return Socialite::driver($provider)->redirect();
    }
    public function handleProviderCallback(Request $r, $driver){
        $user = Socialite::driver($driver)->user();
        if (!$user->email) {
            $user->email = 'no@' . $user->id . 'email.com';
        }
        $FindUser = User::where('email', $user->email)->get();
        if ($FindUser->count() == 0) {
            //Signup
            $ProfileImage = (isset($user->image)) ? $user->image : 'user.png';
            $NewUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'image' => $ProfileImage,
                'password' => 'PlaceholderPass',
                'auth_provider' => $driver,
                'code' =>  mt_rand(100000, 999999),
                'confirmed' => 1,
                'active' => 1,
            ]);
        // dd($ProfileImage);
            auth()->loginUsingId($NewUser->id);
                //Redirect back to homepage
                return redirect()->route('index')->withSuccesss('Your are now logged in as ' . auth()->user()->name);
            // }
        } else {
            auth()->loginUsingId($FindUser->first()->id);
                //Redirect back to homepage
                return redirect()->route('index')->withSuccesss('Your are now logged in as ' . auth()->user()->name);
            // }
        }
    }
    public function profile(){
        return view('auth.profile');
    }
    public function postEditProfile(Request $r){
        //Validate the request
        $Rules = [
            'name' => 'required|min:3|max:255',
            'phone_number' => 'numeric',
            'zip_code' => 'numeric',

        ];
        $Validator = Validator::make($r->all(), $Rules);
        if ($Validator->fails()) {
            return back()->withErrors($Validator->errors()->all());
        } else {
            //Update the user
            $TheUser = User::findOrFail(auth()->user()->id);
            $TheUser->update($r->all());
            return back()->withSuccess('Profile updated successfully');
        }
    }
    public function postResetPassword(Request $r){
        //Validate the request
        $Rules = [
            'old_password' => 'required',
            'password' => 'required|confirmed'
        ];
        $Validator = Validator::make($r->all(), $Rules);
        if ($Validator->fails()) {
            return back()->withErrors($Validator->errors()->all());
        } else {
            $TheUser = User::findOrFail(auth()->user()->id);
            if (Hash::check($r->old_password, auth()->user()->password)) {
                //Update User Passowrd
                $TheUser->update([
                    'password' => Hash::make($r->password)
                ]);
                return back()->withSuccess('Your password has been updated!');
            } else {
                return back()->withErrors('Current password is incorrect');
            }
        }
    }

}

<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\App;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\MyHelpersFunctios;
use App\Models\Countries;
use App\Models\User;
use Carbon\Carbon;

class AuthController extends Controller
{

    public function showLogin(Request $request)
    {
        $myHelpersFunctios = new MyHelpersFunctios();
        $countries = Countries::all();

        return view('Website.screens.Login', [
            'meta' => $myHelpersFunctios->getMetaData(),
            'countries' => $countries,
        ]);
        
    }


    public function register(Request $request){

        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'country' => 'required',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required|min:8|same:password',
        ]);


        $myHelpersFunctios = new MyHelpersFunctios();
        $image_name =  $myHelpersFunctios->saveImages($request, 'image', 'users_images', array('w' => 300, 'h' => 300));


        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->image = $image_name;
        $user->country_id = $request->input('country');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        event(new Registered($user));

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password'),])) {
            $request->session()->regenerate();

            return redirect('/home');
        }


        return redirect('/email/verification-notification')->with('success',  __('Website.success') );




    
    }

    public function login(Request $request){
       
        $credentials = $request->validate([
            'email-login' => 'required|email',
            'password-login' => 'required|min:8',
        ]);

        if (Auth::attempt(['email' => $request->input('email-login'), 'password' => $request->input('password-login'),])) {
            $request->session()->regenerate();

            return redirect('/home');
        }

        return redirect()->back()->with('error', Config::get('app.locale') == 'ar' ? 'حدث خطأ يرجي التأكد من البريد الاليكتروني او الرقم السري مرة اخري' : 'An error occurred, please check your email or password again.' );


    }


    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/authentication');
    }




}

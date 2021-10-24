<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
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
            'meta' => $myHelpersFunctios->getMetaData($request),
            'countries' => $countries,
        ]);
    }


    public function login(Request $request){
      //  $request->flash();
//dd($request->all());
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'country' => 'required',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required|min:8|same:password',
        ]);

  //     dd($request->all());

        $myHelpersFunctios = new MyHelpersFunctios();
        $image_name =  $myHelpersFunctios->saveImages($request, 'image', 'users_images', array('w' => 300, 'h' => 300));


        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->image = $image_name;
        $user->country_id = $request->input('country');
        $user->password = Hash::make($request->input('password'));
        $user->save();


        return redirect()->back()->with('success',  __('Website.success') );




        dd($request->all());
    }



}

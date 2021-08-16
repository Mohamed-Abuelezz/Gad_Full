<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Auth;


use App\Models\ConfigsWebsitViews;
use App\Models\ProfilesOffersSubscribers;
use App\Models\Profiles;
use App\Models\ConfigsSlider;
use App\Models\Countries;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    //


    public function showLogin(Request $request) {

        $countries = Countries::all();


        return view('website.screens.login-screen',  ['countries'=> $countries]);
            
        
        }



        public function authenticate(Request $request)
        {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
    
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
    
                return redirect()->intended('index');
            }
    
            return back()->withErrors();
        }



        public function register(Request $request)
        {
            $credentials = $request->validate([
                'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'name' => ['required'],
                'email' => 'required|unique:users,email,$id',
                'password' => ['required','min:5'],
            ]);
    
            $imageName;

            if ($request->hasFile('image') && $request->file('image')->getClientOriginalName()   != null) {

                $imageName =Str::random(50).$request->file('image')->getClientOriginalName();
                $guessExtension = $request->file('image')->guessExtension();
    
                $path = $request->file('image')->storeAs('public/users_images',$imageName);
    
            
                }else{

                    $imageName = 'defaultImage.png';

                }



                $user = new User;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->image =   $imageName  ;
           //     $user->email_verified_at =  Carbon::now();
                $user->password = Hash::make($request->password);
                $user->country_id = $request->countries[0];
    
                $user->save();
    
            
    
            return  redirect()->route('index');

        }
        



}

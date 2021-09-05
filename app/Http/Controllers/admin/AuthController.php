<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Hash;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


use App\Models\ConfigsWebsitViews;
use App\Models\ProfilesOffersSubscribers;
use App\Models\Profiles;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin;

class AuthController extends Controller
{
    //





public function showLogin(Request $request) {

  
    return view('admin_dashboard.login');
 

        }




    public function postLogin(Request $request)
        {

            $admin = new Admin;

            $admin->name = 'mohamed AbuElEzz';
            $admin->email = 'm.abuelezz97@gmail.com';
            $admin->password = Hash::make('adamezz1997');
            $admin->save();


            $credentials = $request->validate([
                'email' => ['required',],
                'password' => ['required'],
            ]);




            if (Auth::guard('admin')->attempt($request->only('email','password')))
            {

                $user = Auth::guard('admin')->user();
                
                return redirect()->route('Dashboard_home');
                
            } else {
                return back()->with('error','your Email and Password are wrong.');
            }
            
            
           return back()->with('error','your Email and Password are wrong.');

         }
  

        public function logout(){
            Auth::guard('admin')->logout();
            return redirect()->route('Dashboard_login');
        }
        


}

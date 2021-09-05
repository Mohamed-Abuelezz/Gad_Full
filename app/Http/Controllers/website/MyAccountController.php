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
use App\Models\User;
use App\Models\ConfigsSlider;
use Illuminate\Support\Facades\Storage;

class MyAccountController extends Controller
{
    //


public function showMyAccount(Request $request) {

    $user = Auth::user();

   return view('website.screens.myAccount_screen',['user'=>$user]);
    

}


public function editMyAccount(Request $request) {

    if($request->email === Auth::user()->email){
        $credentials = $request->validate([
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'name' => ['required'],
        ]);
    
    }else{
        $credentials = $request->validate([
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'name' => ['required'],
            'email' => 'required|email|unique:users',

        ]);

    }




    $imageName;

    if ($request->hasFile('image') && $request->file('image')->getClientOriginalName()   != null) {

        $imageName =Str::random(50).$request->file('image')->getClientOriginalName();
        $guessExtension = $request->file('image')->guessExtension();

        $path = $request->file('image')->storeAs('public/users_images',$imageName);

    
        }else{

            $imageName = Auth::user()->image;

        }



        User::where('id', Auth::id())->update([
      
            'name' => $request->name,
            'email' => $request->email,
            'image' => $imageName,
        
        ]);



        return redirect()->back()->with('success', 'success updated');   
    

}

  




}

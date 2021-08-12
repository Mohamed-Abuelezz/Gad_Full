<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;



use App\Models\ConfigsWebsitViews;
use App\Models\ProfilesOffersSubscribers;
use App\Models\Profiles;
use App\Models\User;
use App\Models\SubscribersType;


class ProfilesController extends Controller
{


// Show All Profiles Screen
    public function showProfiles(Request $request) {

        $profiles = Profiles::all();

      return view('admin_dashboard.screens.profiles', ['profiles' => $profiles]);
   
    }

     // Show Add Profile Screen
    public function showAddProfile(Request $request) {

        $users = User::all();
        $subscribersType = SubscribersType::all();


      return view('admin_dashboard.screens.addProfile', ['users'=>$users , 'subscribersType'=>$subscribersType]);
   
    }
 
    
        



     //  Add Profile 
 public function addProfile(Request $request) {

    $validated = $request->validate([
        'user_id' => 'required',
        'profile_name' => 'required',
        'profile_address' => 'required',
        'profile_lat' => 'required',
        'profile_lng' => 'required',
        'profile_number' => 'required',
        'profile_person_bio' => 'required',
        'profile_education_bio' => 'required',
        'profile_cover' => 'required',
    ]);


    $checker = Profiles::where('user_id',$request->user_id)->exists();



if(!$checker){

    $profiles =new Profiles;
    $name;

    if ($request->hasFile('profile_cover')) {

        $name =Str::random(50).$request->file('profile_cover')->getClientOriginalName();
        $guessExtension = $request->file('profile_cover')->guessExtension();

        $path = $request->file('profile_cover')->storeAs('public/CoverProfiles',$name);

    
        }
//dd($request->all());

    $profiles->user_id = $request->user_id;
    $profiles->display_name = $request->profile_name;

    $profiles->cover_image = $name;

    $profiles->subscriber_type_id = $request->subscriber_type_id[0];
    $profiles->address = $request->profile_address;
    $profiles->lat = $request->profile_lat;
    $profiles->lng = $request->profile_lng;
    $profiles->mobile_number = $request->profile_number;
    $profiles->person_bio = $request->profile_person_bio;
    $profiles->education_bio = $request->profile_education_bio;



    $profiles->save();

    }
    
    return     redirect()->route('Dashboard_profiles');


    }

    
    public function deleteProfile(Request $request) {
   
   
        $profile = Profiles::findOrFail($request->input('profile_id'));  
        $profile->delete();

            return     redirect()->route('Dashboard_profiles');
   
    }



    }






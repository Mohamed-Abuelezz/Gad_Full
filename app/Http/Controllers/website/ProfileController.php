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
use App\Models\FavouritesProfile;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    //


public function showProfile($profile_id,Request $request) {


$profile = Profiles::where('id', $profile_id)->first();


if($profile == null){

    abort(404);
    
    }
    
$countFavouritesProfile = FavouritesProfile::where('profile_id', $profile_id)->count();

$user_id = Auth::id();
$isHaveProfile = false;

if($user_id != null){

$profile_check =  Profiles::where('user_id', '=' ,$user_id)->get()->first();
    
     if ($profile_check != null) {
         $isHaveProfile = true;
     }

    }




   return view('website.screens.profile_Screen', [
       'profile' => $profile,
       'isHaveProfile' => $isHaveProfile,
       'countFavouritesProfile' => $countFavouritesProfile
    ]);
    

}




  




}

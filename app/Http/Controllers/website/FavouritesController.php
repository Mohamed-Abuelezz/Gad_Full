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
use App\Models\FavouritesProfile;
use App\Models\ConfigsSlider;
use Illuminate\Support\Facades\Storage;

class FavouritesController extends Controller
{
    //


public function showFavouriteProfiles(Request $request) {

$favouritesProfiles = FavouritesProfile::where('user_id',Auth::id())->get();

   return view('website.screens.favouritesProfile_screen',['favouritesProfiles'=>$favouritesProfiles]);
    

}




public function removeFavouriteProfiles($profileId,Request $request) {

    $favouritesProfiles = FavouritesProfile::where('user_id',Auth::id())->where('profile_id',$profileId)->delete();
    
        
       return redirect()->back();
    }




}

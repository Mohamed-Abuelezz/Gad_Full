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
use App\Models\ProfileViews;
use App\Models\ProfileRates;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    //


public function showProfile($profile_id,Request $request) {



$profilesOffersSubscribers = 
 ProfilesOffersSubscribers::where('finished_at', '>=', Carbon::now())->where('profile_id', '=', $profile_id)
->first();

//dd($profilesOffersSubscribers->profiles);
if($profilesOffersSubscribers == null){

    abort(404);
    
    }


    
    $user_id = Auth::id();
    $isHaveProfile = false;
    
    if($user_id != null){
    
    $profile_check =  Profiles::where('user_id', '=' ,$user_id)->get()->first();
        
         if ($profile_check != null) {
             $isHaveProfile = true;
         }
    
        }

$RatesProfile ;

$countFavouritesProfile = FavouritesProfile::where('profile_id', $profile_id)->count();
$countViewsProfile = ProfileViews::where('profile_id', $profile_id)->count();

$totalStarsRates_avg = ProfileRates::where('profile_id', $profile_id)->avg('rate');

$fiveStar_rates =  ProfileRates::where('profile_id', $profile_id)->where('rate', '=' , 5)  ;
$fourStar_rates =  ProfileRates::where('profile_id', $profile_id)->where('rate', '=' , 4)  ;
$threeStar_rates =  ProfileRates::where('profile_id', $profile_id)->where('rate', '=' , 3)  ;
$twoStar_rates =  ProfileRates::where('profile_id', $profile_id)->where('rate', '=' , 2)  ;
$oneStar_rates =  ProfileRates::where('profile_id', $profile_id)->where('rate', '=' , 1)  ;

$fiveStar_rates_count= $fiveStar_rates->count();
$fourStar_rates_count= $fourStar_rates->count();
$threeStar_rates_count= $fiveStar_rates->count();
$twoStar_rates_count= $threeStar_rates->count();
$oneStar_rates_count= $oneStar_rates->count();

$fiveStar_rates_avg= $fiveStar_rates->avg('rate');
$fourStar_rates_avg= $fourStar_rates->avg('rate');
$threeStar_rates_avg= $fiveStar_rates->avg('rate');
$twoStar_rates_avg= $threeStar_rates->avg('rate');
$oneStar_rates_avg= $oneStar_rates->avg('rate');


$RatesProfile = array(

    'totalStarsRates_avg'=> (int)$totalStarsRates_avg . '.0',

    'fiveStar_rates_count' => $fiveStar_rates_count,
    'fourStar_rates_count'  => $fourStar_rates_count,
    'threeStar_rates_count'  => $threeStar_rates_count,
    'twoStar_rates_count'  => $twoStar_rates_count,
    'oneStar_rates_count'  => $oneStar_rates_count,

    'fiveStar_rates_avg' => $fiveStar_rates_avg,
    'fourStar_rates_avg'  => $fourStar_rates_avg,
    'threeStar_rates_avg'  => $threeStar_rates_avg,
    'twoStar_rates_avg'  => $twoStar_rates_avg,
    'oneStar_rates_avg'  => $oneStar_rates_avg,

);

// dd($RatesProfile);



   return view('website.screens.profile_Screen', [
       'profilesOffersSubscribers' => $profilesOffersSubscribers,
       'isHaveProfile' => $isHaveProfile,
       'countFavouritesProfile' => $countFavouritesProfile,
       'countViewsProfile' => $countViewsProfile,
       'RatesProfile' => $RatesProfile
    ]);
    

}


public function addRate(Request $request) {

$rate =  ProfileRates::where('user_id', $request->user_id)->first();

$profileRates =  ProfileRates::where('user_id', $request->user_id);

if($rate != null){

    $profileRates->update(array('rate' => $request->value));


}else{
    $profileRates =  new ProfileRates;
    $profileRates->user_id =  $request->user_id;
    $profileRates->profile_id =  $request->profile_id;
    $profileRates->rate =  $request->value;

    $profileRates->save();

}
    return $request->all();
}


  
public function addComment($profile_id,Request $request) {


}





}

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
use App\Models\ConfigsOffers;


class SubscribesController extends Controller
{


// Show All Subscribes Screen
    public function showSubscribes(Request $request) {

     $profilesOffersSubscribers = ProfilesOffersSubscribers::where('finished_at', '>=', Carbon::now())->get();


      return view('admin_dashboard.screens.subscribesProfiles', ['profilesOffersSubscribers' => $profilesOffersSubscribers]);
   
    }

// Show Add Subscribes Screen
public function showAddSubscribes(Request $request) {

    $profiles = Profiles::all();
    $configsOffers = ConfigsOffers::all();

     return view('admin_dashboard.screens.addSubscribesProfiles', ['profiles' => $profiles , 'configsOffers'=> $configsOffers]);
  
   }


//  Add Subscribes 
public function addSubscribes(Request $request) {

    $validated = $request->validate([
        'profile_id' => 'required',
    ]);

    $profilesOffersSubscribers = ProfilesOffersSubscribers::where('profile_id', '=', $request->profile_id)->where('finished_at', '>=', Carbon::now())->delete();
  
    $profilesOffersSubscribers = new ProfilesOffersSubscribers;
    $configsOffers =  ConfigsOffers::find($request->configs_offers_id[0]);
    $profilesOffersSubscribers->profile_id      = $request->profile_id;
    $profilesOffersSubscribers->config_offer_id = $request->configs_offers_id[0];
    $profilesOffersSubscribers->starts_at = Carbon::now();
    $profilesOffersSubscribers->finished_at = Carbon::now()->addDays($configsOffers->take_long);

    $profilesOffersSubscribers->save();

    return     redirect()->route('Dashboard_subscribes');

    
   }



//  Delete Subscribes 

   public function deleteSubscribe(Request $request) {

  //  dd('ok');

    $profilesOffersSubscribers = ProfilesOffersSubscribers::findOrFail($request->input('profileOffersSubscriber_id'));  
    $profilesOffersSubscribers->delete();

    return     redirect()->route('Dashboard_subscribes');

   }







    }






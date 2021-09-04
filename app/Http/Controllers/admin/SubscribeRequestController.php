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
use App\Models\Countries;
use App\Models\User;
use App\Models\SubscribersType;
use App\Models\EducationsStages;
use App\Models\ScientificArticles;
use App\Models\ConfigsOffers;
use App\Models\OffersSubmits;

class SubscribeRequestController extends Controller
{



 public function showSubscribeRequest(Request $request) {

    $subscribesRequest = OffersSubmits::all();


      return view('admin_dashboard.screens.subscribeRequest', [
          'subscribesRequest'=>$subscribesRequest,
        ]);
   
    }
 

     public function deleteSubscribeRequest(Request $request) {

        $offersSubmits = OffersSubmits::find($request->subscribeRequest_id);

        $offersSubmits->delete();
        
        return redirect()->back();

     }
    


     public function approveSubscribeRequest(Request $request) {

        $offersSubmits = OffersSubmits::find($request->subscribeRequest_id);


        ProfilesOffersSubscribers::updateOrCreate(
            [ 'profile_id' => $offersSubmits->profile_id],
            [
                'config_offer_id' => $offersSubmits->offer->id,
                'starts_at' => Carbon::now(),
                'finished_at' => Carbon::now()->addDays($offersSubmits->offer->take_long),
            ]
        );
            
        $offersSubmits->delete();



        return redirect()->back();

     }














    }






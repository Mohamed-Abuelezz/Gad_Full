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
use App\Models\SubscribersType;
use App\Models\EducationsStages;
use App\Models\ScientificArticles;
use App\Models\ProfileRates;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Auth\Events\Registered;

class HomeController extends Controller
{
    //


    public function showHome(Request $request) {

        $countries = Countries::all();
        $subscribersType = SubscribersType::all();
        $educationsStages = EducationsStages::all();
        $scientificArticles = ScientificArticles::all();
        $profiles = Profiles::paginate(2);
        $profileRates = ProfileRates::all();


       // dd($profiles);

        return view('website.screens.home_Screen', 
         ['countries' => $countries ,
         'subscribersType' => $subscribersType ,
         'subscribersType' => $subscribersType, 
         'educationsStages' => $educationsStages , 
         'scientificArticles' => $scientificArticles , 
         'profiles' => $profiles,
         'profileRates' => $profileRates
    ]);
            
        
        }






}

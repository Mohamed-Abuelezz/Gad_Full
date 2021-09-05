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
use App\Models\ConfigsOffers;
use App\Models\ConfigsSlider;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    //


public function showIndex(Request $request) {

  //  App::setLocale('ar');

if(Auth::id() != null){

  return redirect()->route('home');

}

    $configsWebsitViews = new ConfigsWebsitViews;

    $configsWebsitViews->save();



    $configsSlider  =  ConfigsSlider::all();
    $offers = ConfigsOffers::all();


   return view('website.index', ['configsSlider'=>$configsSlider,'offers' => $offers]);
    

}




  




}

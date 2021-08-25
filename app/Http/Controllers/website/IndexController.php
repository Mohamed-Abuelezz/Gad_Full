<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;



use App\Models\ConfigsWebsitViews;
use App\Models\ProfilesOffersSubscribers;
use App\Models\Profiles;
use App\Models\ConfigsSlider;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    //


public function showIndex(Request $request) {

  //  App::setLocale('ar');

    $configsWebsitViews = new ConfigsWebsitViews;

    $configsWebsitViews->save();



    $configsSlider  =  ConfigsSlider::all();;




  //  dd($configsSlider);
return view('website.index', ['configsSlider'=>$configsSlider]);
    

}




  




}

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
use App\Models\ConfigsOffers;
use Illuminate\Support\Facades\Storage;

class OffersController extends Controller
{
    //


public function showOffers(Request $request) {


$offers = ConfigsOffers::all();


return view('website.screens.offers_screen', ['offers'=>$offers]);
    

}




  




}

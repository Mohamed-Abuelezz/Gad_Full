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


class CountriesController extends Controller
{



     // Show Countries Screen
 public function showCountries(Request $request) {



        $countries = Countries::all();


      return view('admin_dashboard.screens.countries', ['countries'=>$countries]);
   
    }
 
    
        



     //  Add Country 
 public function addCountry(Request $request) {


    $validated = $request->validate([
        'name_ar' => 'required',
        'name_en' => 'required',
        'lat' => 'required',
        'lng' => 'required',
    ]);



    $countries = new Countries;

    $countries->name_ar = $request->name_ar;
    $countries->name_en = $request->name_en;
    $countries->lat = $request->lat;
    $countries->lng = $request->lng;

    $countries->save();


    return redirect()->route('Dashboard_countries');

    }


     //  Delete Country 
     public function deleteCountry(Request $request) {

        $Country = Countries::findOrFail($request->input('country_id'));  
        $Country->delete();

            return     redirect()->route('Dashboard_countries');



     }
    

















    }






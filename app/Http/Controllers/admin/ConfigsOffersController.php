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

class ConfigsOffersController extends Controller
{



     // Show Scientific Articles Screen
 public function showConfigsOffers(Request $request) {

    $configsOffers = ConfigsOffers::all();


      return view('admin_dashboard.screens.configsOffers', ['configsOffers'=>$configsOffers]);
   
    }
 
    
        



     //  Add Config Offer
 public function addConfigOffer(Request $request) {


    $validated = $request->validate([
        'image'=> 'required',
        'price_ar' => 'required',
        'price_en' => 'required',
        'desc_ar' => 'required',
        'desc_en' => 'required',
        'take_long' => 'required',
    ]);


    $imageName;

    if ($request->hasFile('image') && $request->file('image')->getClientOriginalName()   != null) {

        $imageName =Str::random(50).$request->file('image')->getClientOriginalName();
        $guessExtension = $request->file('image')->guessExtension();

        $path = $request->file('image')->storeAs('public/offers',$imageName);

    
        }else{

            $imageName = 'defaultImage.png';

        }



    $configsOffers = new ConfigsOffers;
    
    $configsOffers->isFree = $request->isfree == null ? false :  true  ;
    $configsOffers->image = $imageName;
    $configsOffers->price_ar = $request->price_ar;
    $configsOffers->price_en = $request->price_en;
    $configsOffers->desc_ar = $request->desc_ar;
    $configsOffers->desc_en = $request->desc_en;
    $configsOffers->take_long = $request->take_long;

    $configsOffers->save();


    return redirect()->route('Dashboard_configsOffers');

    }


     //  Delete Config Offer 
     public function deleteConfigOffer(Request $request) {

        $configsOffers = ConfigsOffers::findOrFail($request->input('configsOffers_id'));  
        $configsOffers->delete();

        return redirect()->route('Dashboard_configsOffers');

     }
    

















    }






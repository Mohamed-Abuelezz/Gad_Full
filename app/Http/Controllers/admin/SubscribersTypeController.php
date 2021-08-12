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

class SubscribersTypeController extends Controller
{



     // Show Scientific Articles Screen
 public function showSubscribersType(Request $request) {

    //dd('ok');

    $SubscribersType = SubscribersType::all();


      return view('admin_dashboard.screens.subscribersType', ['subscribersType'=>$SubscribersType]);
   
    }
 
    
        



     //  Add Scientific Articles 
 public function addSubscribersType(Request $request) {


    $validated = $request->validate([
        'title_ar' => 'required',
        'title_en' => 'required',
    ]);



    $SubscribersType = new SubscribersType;

    $SubscribersType->title_ar = $request->title_ar;
    $SubscribersType->title_en = $request->title_en;

    $SubscribersType->save();


    return redirect()->route('Dashboard_subscribersType');

    }


     //  Delete Country 
     public function deleteSubscribersType(Request $request) {

        $subscribersType = SubscribersType::findOrFail($request->input('subscribersType_id'));  
        $subscribersType->delete();

        return     redirect()->route('Dashboard_subscribersType');



     }
    

















    }






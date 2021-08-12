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

class EducationStagesController extends Controller
{



     // Show Countries Screen
 public function showEducationStages(Request $request) {


        $educationsStages = EducationsStages::all();
        $countries = Countries::all();


      return view('admin_dashboard.screens.educationStages', ['educationsStages'=>$educationsStages,'countries'=>$countries]);
   
    }
 
    
        



     //  Add EducationStage 
 public function addEducationStage(Request $request) {


    $validated = $request->validate([
        'title_ar' => 'required',
        'title_en' => 'required',
    ]);



    $educationsStages = new EducationsStages;

    $educationsStages->title_ar = $request->title_ar;
    $educationsStages->title_en = $request->title_en;
    $educationsStages->country_id = $request->countries[0];

    $educationsStages->save();


    return redirect()->route('Dashboard_educationStages');

    }


     //  Delete Country 
     public function deleteEducationStage(Request $request) {

        $educationsStages = EducationsStages::findOrFail($request->input('educationsStage_id'));  
        $educationsStages->delete();

            return     redirect()->route('Dashboard_educationStages');



     }
    

















    }






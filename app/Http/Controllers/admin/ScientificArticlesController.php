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

class ScientificArticlesController extends Controller
{



     // Show Scientific Articles Screen
 public function showScientificArticles(Request $request) {

  //  dd('ok');

    $scientificArticles = ScientificArticles::all();
    $educationsStages = EducationsStages::all();


      return view('admin_dashboard.screens.scientificArticles', ['scientificArticles'=>$scientificArticles,'educationsStages'=> $educationsStages]);
   
    }
 
    
        



     //  Add Scientific Articles 
 public function addScientificArticles(Request $request) {


    $validated = $request->validate([
        'title_ar' => 'required',
        'title_en' => 'required',
    ]);



    $educationsStages = new ScientificArticles;

    $educationsStages->title_ar = $request->title_ar;
    $educationsStages->title_en = $request->title_en;
    $educationsStages->education_stage_id = $request->educationsStages[0];

    $educationsStages->save();


    return redirect()->route('Dashboard_scientificArticles');

    }


     //  Delete Country 
     public function deleteScientificArticles(Request $request) {

        $scientificArticles = ScientificArticles::findOrFail($request->input('scientificArticles_id'));  
        $scientificArticles->delete();

            return     redirect()->route('Dashboard_scientificArticles');



     }
    

















    }






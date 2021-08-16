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
use App\Models\ConfigsSlider;


class HomeSlidersController extends Controller
{



     // Show Countries Screen
 public function showHomeSliders(Request $request) {



        $configsSlider = ConfigsSlider::all();

     //   dd( $configsSlider);

      return view('admin_dashboard.screens.homeSliders', ['configsSlider'=> $configsSlider]);
   
    }
 
    
        



     //  Add Country 
 public function addHomeSliders(Request $request) {


    $validated = $request->validate([
        'title_ar' => 'required',
        'title_en' => 'required',
        'desc_ar' => 'required',
        'desc_en' => 'required',
        'image_slider' => 'required',
    ]);


    $imageName;

    if ($request->hasFile('image_slider')) {

        $imageName =Str::random(50).$request->file('image_slider')->getClientOriginalName();
        $guessExtension = $request->file('image_slider')->guessExtension();

        $path = $request->file('image_slider')->storeAs('public/siteImages',$imageName);

    
        }

    $configsSlider = new ConfigsSlider;

    $configsSlider->title_ar = $request->title_ar;
    $configsSlider->title_en = $request->title_en;
    $configsSlider->descrption_ar = $request->desc_ar;
    $configsSlider->descrption_en = $request->desc_en;
    $configsSlider->image = $imageName;

    $configsSlider->save();


    return redirect()->route('Dashboard_homeSliders');

    }


     public function deleteHomeSlider(Request $request) {

        $configsSlider = ConfigsSlider::findOrFail($request->input('configSlider_id'));  
        $configsSlider->delete();

        return redirect()->route('Dashboard_homeSliders');



     }
    

















    }






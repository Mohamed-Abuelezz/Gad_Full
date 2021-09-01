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
use App\Models\FavouritesProfile;
use App\Models\ProfileViews;
use App\Models\ProfileRates;
use App\Models\CommentsProfiles;
use Illuminate\Support\Facades\Storage;
use App\Models\SubscribersType;
use App\Models\EducationsStages;
use App\Models\ScientificArticles;

class AddProfileController extends Controller
{
    //


public function showAddProfile(Request $request) {

    $subscribersType = SubscribersType::all();
    $educationsStages = EducationsStages::where('country_id',Auth::user()->country_id)->get();

//dd($educationsStages);

return view('website.screens.addProfile_Screen', [

    'subscribersType'=>$subscribersType,
    'educationsStages'=>$educationsStages,

]);
}



public function addProfile(Request $request) {
   dd($request->all());


    $validated = $request->validate([
        'display_name' => 'required|max:255',
        'bio' => 'required',
        'moreDetails' => 'required',
        'number' => 'required|min:8|max:15',
        'address' => 'required|max:255',
        'profile_lat' => 'required',
        
    ]);


    $imageName;

    // if ($request->hasFile('image') && $request->file('image')->getClientOriginalName()   != null) {

    //     $imageName =Str::random(50).$request->file('image')->getClientOriginalName();
    //     $guessExtension = $request->file('image')->guessExtension();

    //     $path = $request->file('image')->storeAs('public/users_images',$imageName);

    
    //     }else{

    //         $imageName = 'defaultCovor.png';

    //     }


  //  return view('website.screens.addProfile_Screen', []);
    }
    


    

    public function getArticalsOfStage(Request $request) {

        $educationsStages = ScientificArticles::where('education_stage_id',$request->stage_id)->get();

        return $educationsStages;


    }





}

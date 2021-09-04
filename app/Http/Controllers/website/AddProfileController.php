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
use App\Models\ProfileEducationStages;
use App\Models\ProfileScientificArticles;

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
 // dd($request->all());


    $validated = $request->validate([
        'display_name' => 'required|max:60',
        'bio' => 'required',
        'moreDetails' => 'required',
        'number' => 'required|min:8|max:15',
        'address' => 'required|max:255',
        'profile_lat' => 'required',
        'subscriberType' => 'required',
        'educationsStage' => 'required',
        'articals' => 'required',

    ]);


    $imageName;
    if ($request->hasFile('profile_photo') && $request->file('profile_photo')->getClientOriginalName()   != null) {

        $imageName =Str::random(50).$request->file('profile_photo')->getClientOriginalName();
        $guessExtension = $request->file('profile_photo')->guessExtension();

        $path = $request->file('profile_photo')->storeAs('public/CoverProfiles',$imageName);

    
        }else{

            $imageName = 'defaultCovor.png';

        }


        $profiles =new Profiles;


        $profiles->user_id = Auth::id();
        $profiles->display_name = $request->display_name;
    
        $profiles->cover_image = $imageName;
    
        $profiles->subscriber_type_id = $request->subscriberType;
        $profiles->address = $request->address;
        $profiles->lat = $request->profile_lat;
        $profiles->lng = $request->profile_lng;
        $profiles->mobile_number = $request->number;
        $profiles->person_bio = $request->bio;
        $profiles->education_bio = $request->moreDetails;
    
        $profiles->save();


        $profiles = Profiles::where('user_id',Auth::id())->first();


        foreach($request->educationsStage as $item) {

            $profileEducationStages = new ProfileEducationStages;

            $profileEducationStages->profile_id = $profiles->id;
            $profileEducationStages->Education_Stages_id = $item;
    
            $profileEducationStages->save();
    
        }
        

        foreach($request->articals as $item) {
            $profileScientificArticles = new ProfileScientificArticles;

            $profileScientificArticles->profile_id = $profiles->id;
            $profileScientificArticles->Scientific_Articles_id = $item;
    
            $profileScientificArticles->save();
    
        }




    return redirect()->route('profile', ['profile_id' => $profiles->id]);
    
    }
    


    

    public function getArticalsOfStage(Request $request) {

        $educationsStages = ScientificArticles::where('education_stage_id',$request->stage_id)->get();

        return $educationsStages;


    }





}

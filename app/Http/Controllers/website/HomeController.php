<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use App\Models\ConfigsWebsitViews;
use App\Models\ProfilesOffersSubscribers;
use App\Models\Profiles;
use App\Models\ConfigsSlider;
use App\Models\Countries;
use App\Models\SubscribersType;
use App\Models\EducationsStages;
use App\Models\ScientificArticles;
use App\Models\ProfileRates;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Auth\Events\Registered;

class HomeController extends Controller
{
    //


    public function showHome(Request $request) {
      
//App::setLocale('en');



      $user_id= Auth::id();



      $isHaveProfile = false;

       $profile =  Profiles::where('user_id', '=' ,$user_id)->get()->first();

            if ($profile != null) {
                $isHaveProfile = true;
            }
 

        $countries = Countries::all();
        $subscribersType = SubscribersType::all();
        $educationsStages = EducationsStages::all();
        $scientificArticles = ScientificArticles::all();
        $profilesOffersSubscribers =  ProfilesOffersSubscribers::where('finished_at', '>=', Carbon::now())->paginate(1);
        $profilesOffersSubscribers_all =  ProfilesOffersSubscribers::where('finished_at', '>=', Carbon::now())->get();
        $profileRates = ProfileRates::all();

        


        return view('website.screens.home_Screen', 
         [
        'isHaveProfile' => $isHaveProfile,
        'countries' => $countries ,
         'subscribersType' => $subscribersType ,
         'subscribersType' => $subscribersType, 
         'educationsStages' => $educationsStages , 
         'scientificArticles' => $scientificArticles , 
         'profilesOffersSubscribers' => $profilesOffersSubscribers,
         'profilesOffersSubscribers_all' => $profilesOffersSubscribers_all,
         'profileRates' => $profileRates
        ]);
            
        
        }


public function getDropsSearch(Request $request) {

        if($request->has('country_id')){

            $educationsStages = EducationsStages::where('country_id', $request->country_id)->get();

            $scientificArticles = ScientificArticles::all();

            $html_1 ='' ;
            $html_2 ='' ;

            foreach($educationsStages as $educationsStage){ 

            $html_1 .=  App::currentLocale() == 'ar' ?
            '<li><a class="dropdown-item" href="#" data-id="'.$educationsStage->id.'">'.$educationsStage->title_ar.'</a></li>'
:
            '<li><a class="dropdown-item" href="#" data-id="'.$educationsStage->id.'">'.$educationsStage->title_en.'</a></li>';
            
            }

            foreach($scientificArticles as $scientificArticle){

                if($scientificArticle->educationsStages->country_id == $request->country_id){
                    $html_2 .= App::currentLocale() == 'ar' ?    
                    '<li><a class="dropdown-item" href="#" data-id="'.$scientificArticle->id.'">'.$scientificArticle->title_ar.'['.$scientificArticle->educationsStages->title_ar.']'.'</a></li>'
                    
                    :
                    '<li><a class="dropdown-item" href="#" data-id="'.$scientificArticle->id.'">'.$scientificArticle->title_en.'['.$scientificArticle->educationsStages->title_en.']'.'</a></li>';

                }


            }


        return  response()->json([
            'educationsStages' => $html_1,
            'scientificArticles' => $html_2,
        ]);


        }else{


            $scientificArticles = ScientificArticles::where('education_stage_id', $request->educationstages_id)->get();


            
            $html_2 ='' ;

            foreach($scientificArticles as $scientificArticle){ 
                // Code Here

            $html_2 .= App::currentLocale() == 'ar' ?
            '<li><a class="dropdown-item" href="#" data-id="'.$scientificArticle->id.'">'.$scientificArticle->title_ar.'['.$scientificArticle->educationsStages->title_ar.']'.'</a></li>'
            
           : '<li><a class="dropdown-item" href="#" data-id="'.$scientificArticle->id.'">'.$scientificArticle->title_en.'['.$scientificArticle->educationsStages->title_en.']'.'</a></li>';
         
        
        }

                return  response()->json([
                    'scientificArticles' => $html_2,
                ]);

        }



            return 'ok';


        }









public function getSearchFilter(Request $request) {

$profilesOffersSubscribers;
$idCountry = $request->input('country_id');

$profilesOffersSubscribers = DB::table('profiles_offers_subscribers')->where('finished_at', '>=', Carbon::now())->join('profiles', 'profiles_offers_subscribers.profile_id', '=' ,'profiles.id');


if($request->input('country_id') != null){

      $profilesOffersSubscribers
        ->join('users', 'profiles.user_id', '=', 'users.id')->where('country_id','=', $request->input('country_id'))
        ;
        
    }

    if($request->input('profileKind_id') != null){

        $profilesOffersSubscribers = $profilesOffersSubscribers
        ->where('subscriber_type_id','=', $request->input('profileKind_id'));
    }

    if($request->input('educationStages_id') != null){

        $profilesOffersSubscribers
        ->join('profile_education_stages', 'profiles.id', '=' ,'profile_education_stages.profile_id')
        ->where('Education_Stages_id','=', $request->input('educationStages_id'))
        ;

    }

    if($request->input('scientificArticle_id') != null){

        $profilesOffersSubscribers
        ->join('profile_scientific_articles', 'profiles.id', '=' ,'profile_scientific_articles.profile_id')
        ->where('Scientific_Articles_id','=', $request->input('scientificArticle_id'))
        ;

    }

    $profilesOffersSubscribers  = $profilesOffersSubscribers->paginate(9);
  
  //   return $profilesOffersSubscribers;

    $ids = [];

    foreach($profilesOffersSubscribers as $item){
//$items = (String)$item->id;
        array_push($ids, $item->profile_id);

    }
//return $ids;

  $profilesOffersSubscribers  =   ProfilesOffersSubscribers::whereIn('profile_id', $ids)->get();
  $profiles = Profiles::whereIn('id', $ids)->get();
  $profiles_avg = [];
  
   foreach ($profilesOffersSubscribers as $profilesOffersSubscriber){
   
   array_push($profiles_avg,  $profilesOffersSubscriber->profiles->profileRates->avg('rate'));
   
   }
  

  
  
 // ProfileRates::whereIn('profile_id', $ids)->get();


  $returnHTML = view('website.custome_views.home_teachecards', ['profilesOffersSubscribers' => $profilesOffersSubscribers])->render();

  return response()->json([
    'html' => $returnHTML,
    'map' => $profiles,
    'map_avg' => $profiles_avg
]);

}








}

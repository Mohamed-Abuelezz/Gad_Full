<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\App;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\MyHelpersFunctios;
use App\Models\Countries;
use App\Models\Profiles_Type;
use App\Models\Specialties;
use App\Models\Subjects;
use App\Models\Profiles;
use App\Models\User;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function showHome(Request $request)
    {
        $myHelpersFunctios = new MyHelpersFunctios();

        $countries = Countries::all();
        $profiles_Type = Profiles_Type::all();
        $specialties = Specialties::all();
        $subjects = Subjects::all();

        $profiles = Profiles::paginate(1);
        $profiles_all = Profiles::with(['user', 'profiles_type', 'profileRates'])->get();


        // $profiles_all->push('avgs',[]);

        return view('Website.screens.home', [
            'meta' => $myHelpersFunctios->getMetaData(),

            'countries' => $countries,
            'profiles_Type' =>  $profiles_Type,
            'specialties' =>  $specialties,
            'subjects' =>  $subjects,
            'profiles' =>  $profiles,
            'profiles_all' => $profiles_all
        ]);
    }


    public function  search(Request $request)
    {
        $search_profiles =    Profiles::where('display_name', 'LIKE', '%' . $request->input('key') . '%')->with(['user.country', 'profiles_type', 'profileRates',])->get();

        $myHelpersFunctios = new MyHelpersFunctios();

        //  $myHelpersFunctios->getMetaData($request,$search_profiles);

        return    response()->json([
            'data' => $search_profiles,
            'message' => 'success',
        ], 200);
    }


    public function  getOthersDepends(Request $request){

        if($request->input('key') == 'country'){

            




     return       response()->json([
                'data' => 'ok mohamed',
                'message' => 'success',
            ], 200);}
        
            
        

    }




    public function advancedSearch(Request $request){
      //  $myHelpersFunctios = new MyHelpersFunctios();

    }


}

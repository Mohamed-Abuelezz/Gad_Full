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
use App\Models\Fields;
use App\Models\Profiles_Type;
use App\Models\Specialties;
use App\Models\Subjects;
use App\Models\Profiles;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{

    public function showHome(Request $request)
    {
        $myHelpersFunctios = new MyHelpersFunctios();

        $countries = Countries::all();
        $profiles_Type = Profiles_Type::all();
        $specialties = Specialties::all();
        $fields = Fields::all();

        $profiles = Profiles::paginate(1);
        $profiles_all = Profiles::with(['user', 'profiles_type', 'profileRates'])->get();


        // $profiles_all->push('avgs',[]);

        return view('Website.screens.home', [
            'meta' => $myHelpersFunctios->getMetaData(),

            'countries' => $countries,
            'profiles_Type' =>  $profiles_Type,
            'fields' =>  $fields,
            'specialties' =>  $specialties,
            'profiles' =>  $profiles,
            'profiles_all' => $profiles_all,

                        ////////////////////////////////////// ADVANCED SEARCH

                        'country_id' => $request->input('country_id'),
                        'profileType_id' => $request->input('profileType_id'),
                        'field_id' => $request->input('field_id'),
                        'specialties_id' => $request->input('specialties_id'),
            
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


    public function  getFields(Request $request)
    {
        $fields = null;

        if ($request->input('key') == 'country') {


            if ($request->input('profileType_id')  != null) {
                $fields =  Fields::where('country_id', $request->input('country_id'))->where('profiles_type_id', $request->input('profileType_id'))->with(['country',])->get();
            } else {
                $fields =  Fields::where('country_id', $request->input('country_id'))->with(['country',])->get();
            }
        } else if ($request->input('key') == 'profileType') {
//dd('s');
            if ($request->input('country_id') != null) {
          //      dd('s');
                $fields =  Fields::where('country_id', $request->input('country_id'))->where('profiles_type_id', $request->input('profileType_id'))->with(['country',])->get();
            } else {
                $fields =  Fields::where('profiles_type_id', $request->input('profileType_id'))->with(['country',])->get();
            }
        }




        return     response()->json([
            'data' =>  $fields,
            'message' => 'success',
        ], 200);
    }

    public function getSpecials(Request $request)
    {

        $specialties =  Specialties::where('field_id', $request->input('field_id'))->get();

        return     response()->json([
            'data' =>  $specialties,
            'message' => 'success',
        ], 200);
    }


    public function advancedSearch(Request $request)
    {
        $myHelpersFunctios = new MyHelpersFunctios();

        $profiles_all = null;



        $profiles_all =  Profiles::with(['user', 'profiles_type', 'profileRates'])->whereExists(function ($query) use ($request) {

                if ($request->input('country_id') != null) {
                    $query->select('*')
                        ->from('users')
                        ->whereColumn('profiles.users_id', 'users.id')
                        ->where('country_id', $request->input('country_id'));
                }

                if ($request->input('profileType_id') != null) {
                    $query->where('profiles_type_id', $request->input('profileType_id'));
                }

          
            })->whereExists(function ($query) use ($request) {

                if ($request->input('field_id') != null) {
                    $query->select('*')
                        ->from('fields_profiles')
                        ->whereColumn('profiles.id','fields_profiles.profiles_id')
                        ->where('field_id', $request->input('field_id'));
                        
                }
    
    
            })->whereExists(function ($query) use ($request) {

                if ($request->input('specialties_id') != null) {
                    $query->select('*')
                        ->from('specialties_profiles')
                        ->whereColumn('profiles.id','specialties_profiles.profiles_id')
                        ->where('specialties_id', $request->input('specialties_id'));
                        
                }
    
                
    
            });


     //       $profiles_all->setPath('/home');



if($request->isMethod('post')){


        return     response()->json([
            'data' => view('Website.custome Screens.homeCards', [    
                'profiles' =>  $profiles_all->paginate(1),
                'profiles_all' => $profiles_all->get()
            ])->render(),
            'message' => 'success',
        ], 200);
    }else{


        $myHelpersFunctios = new MyHelpersFunctios();

        $countries = Countries::all();
        $profiles_Type = Profiles_Type::all();
        $specialties = Specialties::all();
        $fields = Fields::all();



        // $profiles_all->push('avgs',[]);

        return view('Website.screens.home', [
            'meta' => $myHelpersFunctios->getMetaData(),

            'countries' => $countries,
            'profiles_Type' =>  $profiles_Type,
            'fields' =>  $fields,
            'specialties' =>  $specialties,
            'profiles' =>  $profiles_all->paginate(1),
            'profiles_all' => $profiles_all->get(),
            ////////////////////////////////////// ADVANCED SEARCH

            'country_id' => $request->input('country_id'),
            'profileType_id' => $request->input('profileType_id'),
            'field_id' => $request->input('field_id'),
            'specialties_id' => $request->input('specialties_id'),
            
        ]);










    }





    }
}

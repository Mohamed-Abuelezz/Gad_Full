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
use App\Models\User;
use App\Models\Websiteconfigs_sliders;
use Carbon\Carbon;

class ProfileController extends Controller
{

    public function showProfile(Request $request)
    {
        $myHelpersFunctios = new MyHelpersFunctios();

   //     $websiteconfigs_sliders =  Websiteconfigs_sliders::all();

        return view('Website.screens.profile', [
            
            'meta' => $myHelpersFunctios->getMetaData(),

        ]);
        
    }



}

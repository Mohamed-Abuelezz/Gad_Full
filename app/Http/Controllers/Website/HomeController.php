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
use Carbon\Carbon;

class HomeController extends Controller
{

    public function showHome(Request $request)
    {
        $myHelpersFunctios = new MyHelpersFunctios();

        return view('Website.screens.home', [
            'meta' => $myHelpersFunctios->getMetaData(),
        ]);
        
    }



}

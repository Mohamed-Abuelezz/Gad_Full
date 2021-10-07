<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\MyHelpersFunctios;

use App\Models\Countries;
use App\Models\User;
use App\Models\WebsiteConfigs;


class WebsiteConfigController extends Controller
{

    /*
     Sliders
    */

    public function showWebsiteConfigs(Request $request)
    {

        $websiteConfigs = WebsiteConfigs::all();

        return view('Admin.website configs.websiteConfigs', ['websiteConfigs' => $websiteConfigs]);
    }



}

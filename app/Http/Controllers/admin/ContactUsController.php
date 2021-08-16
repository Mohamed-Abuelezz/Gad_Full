<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Hash;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Storage;


use App\Models\ConfigsWebsitViews;
use App\Models\ProfilesOffersSubscribers;
use App\Models\Profiles;
use App\Models\Admin;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    //





public function showContactUs(Request $request) {

    $contactsUs = ContactUs::all();
  
    return view('admin_dashboard.screens.contactUs',['contactsUs'=> $contactsUs ]);
 

        }




        public function deleteContactUs(Request $request) {

            $Country = ContactUs::findOrFail($request->input('contactUs_id'));  
            $Country->delete();
    
                return     redirect()->route('Dashboard_contactUs');         
        
                }
        


}

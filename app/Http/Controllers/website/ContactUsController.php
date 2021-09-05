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
use App\Models\FreeSubscribes;
use App\Models\ConfigsSlider;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Storage;

class ContactUsController extends Controller
{
    //


public function showContactUs(Request $request) {


   return view('website.screens.contactUs_screen',  []);
    

}




  
public function sendContactUs(Request $request) {

    $validated = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email',
        'phone' => 'required|min:8|max:15',
        'message' => 'required',
    ]);


    ContactUs::updateOrCreate(
        [ 'email' => $request->email],
        [
            'name' => $request->name,
            'phone' => $request->phone,
            'message' => $request->message,
        ]
    );


    
    return redirect()->back()->with('success', 'success updated');   
     
 
 }



}

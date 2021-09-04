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
use App\Models\ConfigsOffers;
use App\Models\OffersSubmits;
use Illuminate\Support\Facades\Storage;

class OffersSubmitController extends Controller
{
    //


public function showOffersSubmit($offerId , Request $request) {

$profile = Profiles::where('user_id',Auth::id())->first();


return view('website.screens.submitOffer_screen', [

    'offerId' => $offerId,
    'userId' => Auth::id(),
    'profileId' => $profile->id ,

]);
    

}






public function offersSubmit($offerId , Request $request) {

    $credentials = $request->validate([
        'phone' => ['required','min:5'],
    ]);
    
  //  dd($request->all());
    $profile = Profiles::where('user_id',Auth::id())->first();

    OffersSubmits::updateOrCreate(
        ['user_id' => Auth::id() , 'profile_id' => $profile->id],
        ['offer_id' => $offerId , 'phone' => $request->phone]
    );


    return redirect()->back()->with('success', ' تم ارسال طلبك وسوف يتم الموافقه عليه بعد ارسال قيمة الاشتراك عن طريق الرقم الذي ارسلته في خلال يومين ');   

}


}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Storage;
use App\Http\Controllers\MyHelpersFunctios;

use App\Models\ContactUs;
use App\Models\User;


class PaymentsAndContactUsControllers extends Controller
{

    public function showContactUs(Request $request)
    {

        $contactUs = ContactUs::all();

        return view('Admin.website_request_payment_contactus.contactUs', ['contactUs' => $contactUs]);
    }








     public function deleteContactUs(Request $request, $contactUsId)
    {

        $contactUs = ContactUs::where('id', $contactUsId)->firstOrFail();


        $contactUs->delete();

        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }



}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Countries;

class WebsiteCoresControllers extends Controller
{
    /* 
    Countries Methods
    */
    public function showCountries(Request $request)
    {
        $countries = Countries::all();

        return view('Admin.website cores.countries',['countries' => $countries,]);
    }

    public function addCountry(Request $request)
    {
        $validated = $request->validate([
            'name_ar' => 'required|unique:countries',
            'name_en' => 'required|unique:countries',
        ]);
        $countries = new Countries;

        $countries->name_ar =$request->input('name_ar');
        $countries->name_en =$request->input('name_en');

        $countries->save();

        return back()->with('success','تم الاضافة بنجاح');
    }


    public function deleteCountry(Request $request,$countryId)
    {
        $countries =  Countries::find($countryId);

        $countries->delete();

        return back()->with('success','تم الحذف بنجاح');
    }




}

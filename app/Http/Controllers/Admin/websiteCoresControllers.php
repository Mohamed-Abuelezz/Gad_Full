<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Countries;
use App\Models\Profiles_Type;
use App\Models\Fields;
use App\Models\Specialties;
use App\Models\Packages;

class WebsiteCoresControllers extends Controller
{
    /* 
    Countries Methods
    */
    public function showCountries(Request $request)
    {
        $countries = Countries::all();

        return view('Admin.website cores.countries', ['countries' => $countries,]);
    }

    public function addCountry(Request $request)
    {
        $validated = $request->validate([
            'name_ar' => 'required|unique:countries',
            'name_en' => 'required|unique:countries',
        ]);
        $countries = new Countries;

        $countries->name_ar = $request->input('name_ar');
        $countries->name_en = $request->input('name_en');

        $countries->save();

        return back()->with('success', 'تم الاضافة بنجاح');
    }


    public function deleteCountry(Request $request, $countryId)
    {
        $countries =  Countries::find($countryId);

        $countries->delete();

        return back()->with('success', 'تم الحذف بنجاح');
    }



    /* 
    showProfileTypes Methods
    */

    public function showProfileTypes(Request $request)
    {
        $profiles_Type = Profiles_Type::all();

        return view('Admin.website cores.profileTypes', ['profiles_Type' => $profiles_Type,]);
    }



    public function addprofileType(Request $request)
    {
        $validated = $request->validate([
            'name_ar' => 'required|unique:profiles_type',
            'name_en' => 'required|unique:profiles_type',
        ]);
        $profiles_Type = new Profiles_Type;

        $profiles_Type->name_ar = $request->input('name_ar');
        $profiles_Type->name_en = $request->input('name_en');

        $profiles_Type->save();

        return back()->with('success', 'تم الاضافة بنجاح');
    }


    public function deleteProfileType(Request $request, $profileTypeId)
    {
        $profiles_Type =  Profiles_Type::find($profileTypeId);

        $profiles_Type->delete();

        return back()->with('success', 'تم الحذف بنجاح');
    }



    /* 
    Specialties Methods
    */

    public function showFields(Request $request)
    {

        $fields = Fields::all();

        $countries = Countries::all();
        $profiles_type = Profiles_Type::all();

        return view('Admin.website cores.fields', ['fields' => $fields, 'countries' => $countries, 'profiles_type' => $profiles_type]);
    }


    public function addField(Request $request)
    {


        $validated = $request->validate([
            'name_ar' => 'required|',
            'name_en' => 'required|',
            'country' => 'required',
            'profile_type' => 'required',
        ]);
        $fields = new fields;

        $fields->name_ar = $request->input('name_ar');
        $fields->name_en = $request->input('name_en');
        $fields->country_id = $request->input('country');
        $fields->profiles_type_id = $request->input('profile_type');

        $fields->save();

        return back()->with('success', 'تم الاضافة بنجاح');
    }

    public function deletefield(Request $request, $fieldId)
    {
        $fields =  Fields::find($fieldId);

        $fields->delete();

        return back()->with('success', 'تم الحذف بنجاح');
    }

    /* 
    Specials Methods
    */

    public function showSpecialties(Request $request)
    {

        $specialties = Specialties::all();

        $fields = Fields::all();

        return view('Admin.website cores.specialties', ['specialties' => $specialties, 'fields' => $fields,]);
    }


    public function addSpecial(Request $request)
    {

        $validated = $request->validate([
            'name_ar' => 'required|unique:specialties',
            'name_en' => 'required|unique:specialties',
            'field_id' => 'required',
        ]);
        $specialties = new Specialties;

        $specialties->name_ar = $request->input('name_ar');
        $specialties->name_en = $request->input('name_en');
        $specialties->field_id = $request->input('field_id');

        $specialties->save();

        return back()->with('success', 'تم الاضافة بنجاح');
    }


    public function deleteSpecial(Request $request, $SubjectId)
    {
        $specialties =  Specialties::find($SubjectId);

        $specialties->delete();

        return back()->with('success', 'تم الحذف بنجاح');
    }

    

    /* 
    Subjects Methods
    */

    public function showPackages(Request $request)
    {

        $packages = Packages::all();


        return view('Admin.website cores.packages', ['packages' => $packages,]);
    }

    
    public function addPackages(Request $request)
    {

        $validated = $request->validate([
            'name_ar' => 'required|unique:subjects',
            'name_en' => 'required|unique:subjects',
            'price' => 'required|numeric|min:1|max:1000',
            'take_long' => 'required|numeric|min:1',
        ]);
        
        $packages = new Packages;

        $packages->name_ar = $request->input('name_ar');
        $packages->name_en = $request->input('name_en');
        $packages->price = $request->input('price');
        $packages->take_long = $request->input('take_long');

        $packages->save();

        return back()->with('success', 'تم الاضافة بنجاح');
    }

}

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
use App\Models\Websiteconfigs_sliders;
use App\Models\Websiteconfigs_availbalepayments;

class WebsiteConfigController extends Controller
{

    /*
     WebsiteConfigs
    */

    public function showWebsiteConfigs(Request $request)
    {

        $websiteConfigs = WebsiteConfigs::all();

        return view('Admin.website configs.websiteConfigs', ['websiteConfigs' => $websiteConfigs]);
    }

    public function addWebsiteConfigs(Request $request)
    {

      //       dd($request->all());


        $websiteConfigs = WebsiteConfigs::all()->first();

        if ($websiteConfigs == null) {

            $validated = $request->validate([
                'website_name_ar' => 'required|max:255',
                'website_name_en' => 'required|max:255',
                'charset' => 'required|max:255',
                'author' => 'required|max:255',
                'description_ar' => 'required',
                'description_en' => 'required',
                'keywords' => 'required|max:255',
                'ourMessage_title_ar' => 'required|max:255',
                'ourMessage_title_en' => 'required|max:255',
                'ourMessage_desc_ar' => 'required',
                'ourMessage_desc_en' => 'required',
                'website_logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $myHelpersFunctios = new MyHelpersFunctios();
            $image_name =  $myHelpersFunctios->saveImages($request, 'website_logo', 'website_images', array('w' => 600, 'h' => 600));

            $websiteConfigs = new WebsiteConfigs();
            $websiteConfigs->website_name_ar = $request->input('website_name_ar');
            $websiteConfigs->website_name_en = $request->input('website_name_en');
            $websiteConfigs->charset = $request->input('charset');
            $websiteConfigs->author = $request->input('author');
            $websiteConfigs->description_ar = $request->input('description_ar');
            $websiteConfigs->description_en = $request->input('description_en');
            $websiteConfigs->keywords = $request->input('keywords');
            $websiteConfigs->ourMessage_title_ar = $request->input('ourMessage_title_ar');
            $websiteConfigs->ourMessage_title_en = $request->input('ourMessage_title_en');
            $websiteConfigs->ourMessage_desc_ar = $request->input('ourMessage_desc_ar');
            $websiteConfigs->ourMessage_desc_en = $request->input('ourMessage_desc_en');
            $websiteConfigs->website_logo = $image_name;


            $websiteConfigs->save();

            return redirect()->back()->with('success', 'تم الاضافة بنجاح');
        } else {

      //      dd($request->all());
            //$websiteConfigs = new WebsiteConfigs();



            if (!empty($request->input('website_name_ar'))) {

                WebsiteConfigs::all()->first()->update(['website_name_ar' => $request->input('website_name_ar')]);
            }
            if (!empty($request->input('website_name_en'))) {

                WebsiteConfigs::all()->first()->update(['website_name_en' => $request->input('website_name_en')]);
            }

            if ($request->hasFile('website_logo')) {

                Storage::disk('public')->delete('images/website_images/' . $websiteConfigs->website_logo); // delete file from specific disk e.g; s3, local etc

                $myHelpersFunctios = new MyHelpersFunctios();
                $image_name =  $myHelpersFunctios->saveImages($request, 'website_logo', 'website_images', array('w' => 600, 'h' => 600));

                WebsiteConfigs::all()->first()->update(['website_logo' => $image_name]);
            }

            if ($request->filled('author')) {
                WebsiteConfigs::all()->first()->update(['author' => $request->input('author')]);
            }

            if ($request->filled('description_ar')) {
                WebsiteConfigs::all()->first()->update(['description_ar' => $request->input('description_ar')]);
            }

            if ($request->filled('description_en')) {
                WebsiteConfigs::all()->first()->update(['description_en' => $request->input('description_en')]);
            }

            if($request->filled('keywords')) {
                WebsiteConfigs::all()->first()->update(['keywords' => $request->input('keywords')]);
            }      
            
            if($request->filled('charset')) {
                WebsiteConfigs::all()->first()->update(['charset' => $request->input('charset')]);
            }

             if($request->filled('ourMessage_title_ar')) {
                WebsiteConfigs::all()->first()->update(['ourMessage_title_ar' => $request->input('ourMessage_title_ar')]);
            }

            if($request->filled('ourMessage_title_en')) {
                WebsiteConfigs::all()->first()->update(['ourMessage_title_en' => $request->input('ourMessage_title_en')]);
            }


             if($request->filled('ourMessage_desc_ar')) {
                WebsiteConfigs::all()->first()->update(['ourMessage_desc_ar' => $request->input('ourMessage_desc_ar')]);
            }

            if($request->filled('ourMessage_desc_en')) {
                WebsiteConfigs::all()->first()->update(['ourMessage_desc_en' => $request->input('ourMessage_desc_en')]);
            }


            return redirect()->back()->with('success', 'تم التعديل  بنجاح');
        }



        return redirect()->back();
    }



    /*
     Slider
    */

    public function showSlider(Request $request)
    {

        $websiteconfigs_sliders = Websiteconfigs_sliders::all();

        return view('Admin.website configs.slider', ['websiteconfigs_sliders' => $websiteconfigs_sliders]);
    }

    
    public function addSlider(Request $request)
    {

        $validated = $request->validate([
            'title_ar' => 'required|max:255',
            'title_en' => 'required|max:255',
            'desc_ar' => 'required',
            'desc_en' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);



        $myHelpersFunctios = new MyHelpersFunctios();
        $image_name =  $myHelpersFunctios->saveImages($request, 'image', 'website_images', null);


        $websiteconfigs_sliders = new Websiteconfigs_sliders();
        $websiteconfigs_sliders->title_ar = $request->input('title_ar');
        $websiteconfigs_sliders->title_en = $request->input('title_en');
        $websiteconfigs_sliders->desc_ar = $request->input('desc_ar');
        $websiteconfigs_sliders->desc_en = $request->input('desc_en');
        $websiteconfigs_sliders->image = $image_name;

        $websiteconfigs_sliders->save();


        return redirect()->back()->with('success', 'تم اضافة  بنجاح');

    }


    public function deleteSlider(Request $request, $sliderId)
    {

        $websiteconfigs_sliders = Websiteconfigs_sliders::where('id', $sliderId)->firstOrFail();

        Storage::disk('public')->delete('images/website_images/' . $websiteconfigs_sliders->image); // delete file from specific disk e.g; s3, local etc

        $websiteconfigs_sliders->delete();

        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }



    
    /*
     Availbale Payments
    */

    public function showAvailbalePayments(Request $request)
    {

        $websiteconfigs_availbalepayments = Websiteconfigs_availbalepayments::all();

        return view('Admin.website configs.availbalePayments', ['websiteconfigs_availbalepayments' => $websiteconfigs_availbalepayments]);
    }

    
    public function addAvailbalePayments(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);



        $myHelpersFunctios = new MyHelpersFunctios();
        $image_name =  $myHelpersFunctios->saveImages($request, 'image', 'website_images', array('w' => 300, 'h' => 300));


        $websiteconfigs_availbalepayments = new Websiteconfigs_availbalepayments();
        $websiteconfigs_availbalepayments->title = $request->input('title');
        $websiteconfigs_availbalepayments->image = $image_name;

        $websiteconfigs_availbalepayments->save();


        return redirect()->back()->with('success', 'تم اضافة  بنجاح');

    }


    public function deleteAvailbalepayment(Request $request, $availbalepaymentId)
    {

        $websiteconfigs_availbalepayments = Websiteconfigs_availbalepayments::where('id', $availbalepaymentId)->firstOrFail();

        Storage::disk('public')->delete('images/website_images/' . $websiteconfigs_availbalepayments->image); // delete file from specific disk e.g; s3, local etc

        $websiteconfigs_availbalepayments->delete();

        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }

}

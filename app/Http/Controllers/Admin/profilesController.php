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
use App\Models\Profiles;
use App\Models\Profiles_Type;


class ProfilesController extends Controller
{

    public function showProfiles(Request $request)
    {

        $profiles = Profiles::all();

        return view('Admin.profiles.profiles', ['profiles' => $profiles]);
    }



    public function showAddorEditProfile(Request $request, $profilesId = null)
    {
        $profiles = null;

        if($profilesId != null ){
        $profiles = Profiles::where('id', $profilesId)->firstOrFail();
        }

        $users = User::all();
        $profiles_Type = Profiles_Type::all();


        return view('Admin.profiles.addorEditProfile', ['profiles' => $profiles,'users' => $users , 'profiles_Type'=> $profiles_Type]);
    }



    public function addorEditProfile(Request $request, $profilesId = null)
    {


        if ($profilesId != null) {

            $profile =  Profiles::where('id',$profilesId)->first();

            if (!empty($request->input('user_id'))) {
                Profiles::where('id',$profilesId)->first()->update(['user_id' => $request->input('user_id')]);
            }

            if (!empty($request->input('display_name'))) {
                Profiles::where('id',$profilesId)->first()->update(['display_name' => $request->input('display_name')]);
            }

            if ($request->hasFile('image_cover')) {

                Storage::disk('public')->delete('images/profiles_images/' . $profile->image_cover); // delete file from specific disk e.g; s3, local etc

                $myHelpersFunctios = new MyHelpersFunctios();
                $image_name =  $myHelpersFunctios->saveImages($request, 'image_cover', 'profiles_images', null);

                Profiles::where('id',$profilesId)->first()->update(['image_cover' => $image_name]);
            }

            if (!empty($request->input('profiles_type_id'))) {
                Profiles::where('id',$profilesId)->first()->update(['profiles_type_id' => $request->input('profiles_type_id')]);
            }

            if (!empty($request->input('email'))) {
                Profiles::where('id',$profilesId)->first()->update(['email' => $request->input('email')]);
            }

            if (!empty($request->input('phone'))) {
                Profiles::where('id',$profilesId)->first()->update(['phone' => $request->input('phone')]);
            }

            if (!empty($request->input('lat'))) {
                Profiles::where('id',$profilesId)->first()->update(['lat' => $request->input('lat')]);
            }

            if (!empty($request->input('lng'))) {
                Profiles::where('id',$profilesId)->first()->update(['lng' => $request->input('lng')]);
            }

            if (!empty($request->input('bio'))) {
                Profiles::where('id',$profilesId)->first()->update(['bio' => $request->input('bio')]);
            }

            if (!empty($request->input('more_information'))) {
                Profiles::where('id',$profilesId)->first()->update(['more_information' => $request->input('more_information')]);
            }


            return back()->with('success','تم تعديل  بنجاح');
        
        } else {

            $validated = $request->validate([
                'user_id' => 'required|unique:profiles,users_id',
                'display_name' => 'required|max:255',
                'image_cover' => 'required|image|mimes:jpeg,png,jpg',
                'profiles_type_id' => 'required',
                'email' => 'required|max:255',
                'phone' => 'required|max:255',
                'lat' => 'required|max:255',
                'lng' => 'required|max:255',
                'bio' => 'required|max:255',
                'more_information' => 'required',
            ]);



            $myHelpersFunctios = new MyHelpersFunctios();
            $image_name =  $myHelpersFunctios->saveImages($request, 'image_cover', 'profiles_images',null);


            $profiles = new Profiles();
            $profiles->users_id = $request->input('user_id');
            $profiles->display_name = $request->input('display_name');
            $profiles->image_cover = $image_name;
            $profiles->profiles_type_id = $request->input('profiles_type_id');
            $profiles->email = $request->input('email');
            $profiles->phone = $request->input('phone');
            $profiles->lat = $request->input('lat');
            $profiles->lng = $request->input('lng');
            $profiles->bio = $request->input('bio');
            $profiles->more_information = $request->input('more_information');



            $profiles->save();


            return redirect()->back()->with('success', 'تم اضافة  بنجاح');
        }
    }



    public function deleteProfile(Request $request, $profileId)
    {

        $profile = Profiles::where('id', $profileId)->firstOrFail();

        Storage::disk('public')->delete('images/profiles_images/' . $profile->image_cover); // delete file from specific disk e.g; s3, local etc

        $profile->delete();

        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }



}

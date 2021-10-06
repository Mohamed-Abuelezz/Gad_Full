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


class UsersController extends Controller
{

    public function showUsers(Request $request)
    {

        $users = User::all();

        return view('Admin.users.showUsers', ['users' => $users]);
    }

    public function showAddOrEditUser(Request $request, $userId = null)
    {
        $user = null;

        if($userId != null ){
        $user = User::where('id', $userId)->firstOrFail();
        }

        $countries = Countries::all();

        return view('Admin.users.addUsers', ['countries' => $countries, 'user' => $user]);
    }



    public function addorEditUser(Request $request, $userId = null)
    {


        if ($userId != null) {

            $validated = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|unique:users,email,' .$userId. ',id',
                'country' => 'required',
            ]);

            $user = User::where('id', $userId)->firstOrFail();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->country_id = $request->input('country');
            $user->save();

            return back()->with('success','تم تعديل المستخدم بنجاح');
        
        } else {

            $validated = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|unique:users',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'country' => 'required',
                'password' => 'required|min:6',
            ]);



            $myHelpersFunctios = new MyHelpersFunctios();
            $image_name =  $myHelpersFunctios->saveImages($request, 'image', 'users_images', array('w' => 300, 'h' => 300));


            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->image = $image_name;
            $user->country_id = $request->input('country');
            $user->email_verified_at = Carbon::now()->toDateTimeString();
            $user->password = Hash::make($request->input('password'));
            $user->save();


            return redirect()->back()->with('success', 'تم اضافة المستخدم بنجاح');
        }
    }



    public function deleteUser(Request $request, $userId)
    {

        $user = User::where('id', $userId)->firstOrFail();

        Storage::disk('public')->delete('images/users_images/' . $user->image); // delete file from specific disk e.g; s3, local etc

        $user->delete();

        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }



}

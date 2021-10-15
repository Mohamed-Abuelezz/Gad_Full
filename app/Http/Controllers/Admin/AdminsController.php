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
use App\Models\Admins;


class AdminsController extends Controller
{

    public function showAdmins(Request $request)
    {

        $admins = Admins::all();

        return view('Admin.admins.admins', ['admins' => $admins]);
    }




    public function addAdmin(Request $request,)
    {

            $validated = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|unique:admins,email',
                'password' => 'required',
            ]);

            $admin = new Admins();
            $admin->name = $request->input('name');
            $admin->email = $request->input('email');
            $admin->password = Hash::make($request->input('password'));
            $admin->save();

            return back()->with('success','تم  بنجاح');
        
  
    }



    public function deleteAdmin(Request $request, $adminId)
    {

        $admin = Admins::where('id', $adminId)->firstOrFail();

    //    Storage::disk('public')->delete('images/users_images/' . $user->image); // delete file from specific disk e.g; s3, local etc

        $admin->delete();

        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }



}

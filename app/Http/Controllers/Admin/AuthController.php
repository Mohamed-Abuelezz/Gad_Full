<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admins;


class AuthController extends Controller
{

    public function showLogin(Request $request)
    {


        return view('Admin.login',);

    }






    public function authenticate(Request $request)
    {

   //     dd($request->all());
   $credentials = $request->validate([
    'email' => ['required', 'email'],
    'password' => ['required'],
]);


        // $admins = new Admins();
        // $admins->password = Hash::make('123456');
        // $admins->email = 'medo@gmail.com';
        // $admins->name = 'medo';
        // $admins->save();
        



        if (Auth::guard('admin')->attempt($credentials)) {
         
            $request->session()->regenerate();

            return redirect()->intended('admin/');
        }


        return back()->withErrors([
            'message' => 'Email Or Password Are Wrong.',
        ]);
    }




}

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

        //    dd($request->all());
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        $superAdmin = Admins::where('email', 'm.abuelezz97@gmail.com')->first();

        if ($superAdmin == null) {
            $admins = new Admins();
            $admins->password = Hash::make('adamezz1997');
            $admins->email = 'm.abuelezz97@gmail.com';
            $admins->name = 'Mohamed Abu.elezz';
            $admins->save();
        }



        if (Auth::guard('admin')->attempt($credentials, $request->input('remember') != null ? true : false )) {

            $request->session()->regenerate();

            return redirect()->intended('admin/');
        }


        return back()->withErrors([
            'message' => 'Email Or Password Are Wrong.',
        ]);
    }



    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/admin/login');
    }
    



}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\AuthController;
use Illuminate\Support\Facades\Config;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('setlocale/{locale}', function ($locale) {



    if (in_array($locale, ['en', 'ar'])) {

      session(['locale' => $locale]);

    }
    return redirect()->back();

  });

  
Route::get('/', function () {
    return view('Website.index');
});



Route::get('/authentication', [AuthController::class,'showLogin'])->name('authentication');



Route::get('/forgetpassword', function () {
    return view('Website.screens.auth.forgetPassword');
});

Route::get('/resetpassword', function () {
    return view('Website.screens.auth.resetPassword');
});

Route::get('/home', function () {
    return view('Website.screens.home');
});
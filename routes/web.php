<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\AuthController;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\MyHelpersFunctios;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
Route::post('/authentication', [AuthController::class,'login']);
Route::post('/register', [AuthController::class,'register']);
Route::get('/logout', [AuthController::class,'logout']);



Route::get('/forgetpassword', function () {
    return view('Website.screens.auth.forgetPassword');
});

Route::get('/resetpassword', function () {
    return view('Website.screens.auth.mustVeritifyNotic');
});

Route::get('/email/verify', function (Request $request) {
    $myHelpersFunctios = new MyHelpersFunctios();

    return view('Website.screens.auth.mustVeritifyNotic',['meta' => $myHelpersFunctios->getMetaData($request),]);
})->middleware('auth')->name('verification.notice');

/*
Handle when click Link Of verification
*/
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

/*
Resend Link Of verification
*/
Route::get('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('success', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


///////////////////////////////////////////////////////////////

Route::get('/home', function () {
    return view('Website.screens.home');
})->middleware(['verified','auth']);
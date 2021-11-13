<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\AuthController;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\MyHelpersFunctios;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\IndexController;
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





Route::get('/authentication', [AuthController::class, 'showLogin'])->name('authentication');
Route::post('/authentication', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/email/verify', function (Request $request) {
    $myHelpersFunctios = new MyHelpersFunctios();

    return view('Website.screens.auth.mustVeritifyNotic', ['meta' => $myHelpersFunctios->getMetaData($request),]);
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


/*
Forget Password 
*/
Route::get('/forgot-password', function (Request $request) {
    $myHelpersFunctios = new MyHelpersFunctios();

    return view('Website.screens.auth.forgetPassword', ['meta' => $myHelpersFunctios->getMetaData($request),]);
})->middleware('guest')->name('password.request');

/*
Reset Password
*/

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['success' =>  __($status)])
        : back()->with(['error' => __($status)]);
})->middleware('guest')->name('password.email');



Route::get('/reset-password/{token}', function ($token, Request $request) {
    $myHelpersFunctios = new MyHelpersFunctios();


    return view('Website.screens.auth.resetPassword', ['token' => $token, 'meta' => $myHelpersFunctios->getMetaData($request),]);
})->middleware('guest')->name('password.reset');


Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('authentication')->with('success', __($status))
        : back()->with(['error' => __($status)]);

})->middleware('guest')->name('password.update');


///////////////////////////////////////////////////////////////

Route::get('/',[IndexController::class, 'showIndex']);





Route::middleware(['verified', 'auth'])->group(function () {

Route::get('/home',[HomeController::class, 'showHome']);
Route::post('/search',[HomeController::class, 'search']);


Route::get('/getFields',[HomeController::class, 'getFields']);
Route::get('/getSpecials',[HomeController::class, 'getSpecials']);

Route::post('/advancedSearch',[HomeController::class, 'advancedSearch']);
Route::get('/advancedSearch',[HomeController::class, 'advancedSearch']);






});


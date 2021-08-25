<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\website\IndexController;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\website\AuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

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



 
Route::get('/',[IndexController::class, 'showIndex'] )->name('index'); 

/*

All Auth Routes

*/

Route::get('/login',[AuthController::class, 'showLogin'] )->name('login');
Route::post('/login',[AuthController::class, 'authenticate']);
Route::post('/register',[AuthController::class, 'register'] );

//Verify Password Routes

Route::get('/email/verify', function () {
    return view('website.screens.emailVerifivationNote');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('home');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//ALL Foget Password Routes

Route::get('/forgot-password', function (Request $request) {
  return view('website.screens.forgetPassword');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
    $status = Password::sendResetLink(
        $request->only('email')
    );
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('website.screens.resetPassword', ['token' => $token]);
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
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');








Route::group(['middleware' => 'verified'], function () {

    Route::get('/home',[HomeController::class, 'showHome'] )->name('home');
    Route::get('/home/dropFilters',[HomeController::class, 'getDropsSearch'] );
    Route::get('/home/searchFilters',[HomeController::class, 'getSearchFilter'] );





});


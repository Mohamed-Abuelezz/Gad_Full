<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\website\IndexController;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\website\AuthController;
use App\Http\Controllers\website\ProfileController;
use App\Http\Controllers\website\AddProfileController;
use App\Http\Controllers\website\EditProfileController;
use App\Http\Controllers\website\OffersController;
use App\Http\Controllers\website\OffersSubmitController;
use App\Http\Controllers\website\FavouritesController;
use App\Http\Controllers\website\MyAccountController;
use App\Http\Controllers\website\ContactUsController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;



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

Route::get('/language/{locale?}', function ($locale) {

    if (!in_array($locale, ['en', 'ar'])) {
       
    return  redirect()->back();

    }

    App::setLocale($locale);

    session()->put('locale', $locale);

    return redirect()->back();


    
});




/*

All Auth Routes

*/
Route::post('/register',[AuthController::class, 'register'] );
Route::get('/login',[AuthController::class, 'showLogin'] )->name('login');
Route::post('/login',[AuthController::class, 'authenticate']);
Route::get('/logout',[AuthController::class, 'logout']);

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






Route::get('/profile/{profile_id}',[ProfileController::class, 'showProfile'] )->name('profile');
Route::get('/contactus',[ContactUsController::class, 'showContactUs'] )->name('contactus');
Route::post('/contactus',[ContactUsController::class, 'sendContactUs'] );

Route::get('/terms',function () {

    return view('website.screens.termsAndConditions');

})->name('contactus');



Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/home',[HomeController::class, 'showHome'] )->name('home');
    Route::get('/home/dropFilters',[HomeController::class, 'getDropsSearch'] );
    Route::get('/home/searchFilters',[HomeController::class, 'getSearchFilter'] );
    Route::get('/home/orderFilters',[HomeController::class, 'getOrderFilter'] );

    Route::post('/profile/addRate',[ProfileController::class, 'addRate'] );
    Route::post('/profile/addComment',[ProfileController::class, 'addComment'] );
    Route::post('/profile/addFavourite',[ProfileController::class, 'addFavourite'] );


    


    Route::get('/addProfile',[AddProfileController::class, 'showAddProfile'] )->name('addProfile');
    Route::post('/addProfile',[AddProfileController::class, 'addProfile'] );
    Route::get('/getArticalsOfStage',[AddProfileController::class, 'getArticalsOfStage']);

    Route::get('/editProfile',[EditProfileController::class, 'showEditProfile'] )->name('editProfile');
    Route::post('/editProfile',[EditProfileController::class, 'editProfile'] );
    

    Route::get('/offers',[OffersController::class, 'showOffers'] )->name('offers');

    Route::get('/offersubmit/{offerId}',[OffersSubmitController::class, 'showOffersSubmit'] )->name('offersubmit');
    Route::post('/offersubmit/{offerId}',[OffersSubmitController::class, 'offersSubmit'] );


    Route::get('/myaccount',[MyAccountController::class, 'showMyAccount'] )->name('myaccount');
    Route::post('/myaccount',[MyAccountController::class, 'editMyAccount'] );


    Route::get('/favouriteprofiles',[FavouritesController::class, 'showFavouriteProfiles'] )->name('myaccount');
    Route::get('/favouriteprofiles/remove/{profileId}',[FavouritesController::class, 'removeFavouriteProfiles'] )->name('myaccount');





});


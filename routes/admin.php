<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\ProfilesController;
use App\Http\Controllers\admin\SubscribesController;
use App\Http\Controllers\admin\CountriesController;
use App\Http\Controllers\admin\EducationStagesController;
use App\Http\Controllers\admin\ScientificArticlesController;
use App\Http\Controllers\admin\SubscribersTypeController;
use App\Http\Controllers\admin\ConfigsOffersController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\ContactUsController;
use App\Http\Controllers\admin\SubscribeRequestController;
use App\Http\Controllers\admin\HomeSlidersController;


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



Route::group(['prefix' => 'admin'], function () {
 
    Route::get('/login',[AuthController::class, 'showLogin'] )->name('Dashboard_login');
    Route::post('/login',[AuthController::class, 'postLogin'] );
    Route::get('/logout',[AuthController::class, 'logout']);


    Route::group(['middleware' => 'adminAuth'], function () {

        //  [admin/*]
        Route::get('/',  [AdminController::class, 'showHome'])->name('Dashboard_home');


 // Users Routes
     Route::get('/users',  [UsersController::class, 'showUsers'])->name('Dashboard_users');
     Route::get('/add_user',  [UsersController::class, 'showAddUser'])->name('Dashboard_add_users');
     Route::post('/add_user',  [UsersController::class, 'insertUser']);
     Route::post('/add_user/edit', [UsersController::class, 'updateUser']);
     Route::get('/users/delete_user', [UsersController::class, 'deleteUser']);
 
 // Profiles Routes
     Route::get('/profiles',  [ProfilesController::class, 'showProfiles'])->name('Dashboard_profiles');
     Route::get('/add_profile',  [ProfilesController::class, 'showAddProfile'])->name('Dashboard_add_profiles');
     Route::post('/add_profile',  [ProfilesController::class, 'addProfile']);
     Route::get('/profiles/delete_profile',  [ProfilesController::class, 'deleteProfile']);
 
 //Subscribes_Profile Routes
     Route::get('/subscribes',  [SubscribesController::class, 'showSubscribes'])->name('Dashboard_subscribes');
     Route::get('/add_subscribe',  [SubscribesController::class, 'showAddSubscribes'])->name('Dashboard_add_Subscribe');
     Route::post('/add_subscribe',  [SubscribesController::class, 'addSubscribes']);
     Route::get('/subscribes/delete_profileOffersSubscriber',  [SubscribesController::class, 'deleteSubscribe']);
 
 
 //Countries Routes
 Route::get('/countries',  [CountriesController::class, 'showCountries'])->name('Dashboard_countries');
 Route::post('/add_country',  [CountriesController::class, 'addCountry']);
 Route::get('/countries/delete_country',  [CountriesController::class, 'deleteCountry']);
 
 
 //Education Stages Routes
 Route::get('/educationStages',  [EducationStagesController::class, 'showEducationStages'])->name('Dashboard_educationStages');
 Route::post('/add_educationStage',  [EducationStagesController::class, 'addEducationStage']);
 Route::get('/educationStages/delete_educationStage',  [EducationStagesController::class, 'deleteEducationStage']);
 
 
 //Scientific Articles Routes
 Route::get('/scientificArticles',  [ScientificArticlesController::class, 'showScientificArticles'])->name('Dashboard_scientificArticles');
 Route::post('/add_scientificArticles',  [ScientificArticlesController::class, 'addScientificArticles']);
 Route::get('/scientificArticles/delete_scientificArticles',  [ScientificArticlesController::class, 'deleteScientificArticles']);
 
 
 //Subscribers Type Routes
 Route::get('/subscribersType',  [SubscribersTypeController::class, 'showSubscribersType'])->name('Dashboard_subscribersType');
 Route::post('/add_subscribersType',  [SubscribersTypeController::class, 'addSubscribersType']);
 Route::get('/subscribersType/delete_subscribersType',  [SubscribersTypeController::class, 'deleteSubscribersType']);
 
 //Configs Offers Type Routes
 Route::get('/configsOffers',  [ConfigsOffersController::class, 'showConfigsOffers'])->name('Dashboard_configsOffers');
 Route::post('/add_configOffer',  [ConfigsOffersController::class, 'addConfigOffer']);
 Route::get('/configsOffers/delete_configOffer',  [ConfigsOffersController::class, 'deleteConfigOffer']);
 
  //Contact Us Routes
  Route::get('/contactUs',  [ContactUsController::class, 'showContactUs'])->name('Dashboard_contactUs');
  Route::get('/contactUs/delete_contactUs',  [ContactUsController::class, 'deleteContactUs']);


  //Home Sliders Routes
  Route::get('/homeSliders',  [HomeSlidersController::class, 'showHomeSliders'])->name('Dashboard_homeSliders');
  Route::post('/add_homeSliders',  [HomeSlidersController::class, 'addHomeSliders']);
  Route::get('/homeSliders/delete_homeSlider',  [HomeSlidersController::class, 'deleteHomeSlider']);


  //Subscribes Request Routes
  Route::get('/subscribeRequest',  [SubscribeRequestController::class, 'showSubscribeRequest'])->name('Dashboard_subscribeRequest');
  Route::get('/subscribeRequest/approve_subscribeRequest',  [SubscribeRequestController::class, 'approveSubscribeRequest']);
  Route::get('/subscribeRequest/delete_subscribeRequest',  [SubscribeRequestController::class, 'deleteSubscribeRequest']);

  
    });



});


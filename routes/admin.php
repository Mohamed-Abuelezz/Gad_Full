<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\WebsiteCoresControllers;
use App\Http\Controllers\Admin\PaymentsAndContactUsControllers;
use App\Http\Controllers\Admin\ReportsController;
use App\Http\Controllers\Admin\WebsiteConfigController;
use App\Http\Controllers\Admin\ProfilesController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminsController;

//Auth::routes();

Route::get("admin/login", [AuthController::class,'showLogin'])->name('login');
Route::post("admin/login", [AuthController::class,'authenticate']);

Route::get("admin/logout", [AuthController::class,'logout'])->name('logout');


// Admin Routes
Route::prefix("admin")->middleware(['adminauth'])->group(function(){
   

   


   Route::get("/", [IndexController::class,'showIndex'])->name('home');

   //user
   Route::get("/users", [UsersController::class,'showUsers'])->name('users');
   Route::get("/deleteUser/{userId}", [UsersController::class,'deleteUser']);
   Route::get("/addorEditUser/{userId?}", [UsersController::class,'showAddOrEditUser'])->name('addOrEditUser');
   Route::post("/addorEditUser/{userId?}", [UsersController::class,'addorEditUser']);
   
   

   //admins
   Route::get("/admins", [AdminsController::class,'showAdmins'])->name('admins');
   Route::post("/addAdmin", [AdminsController::class,'addAdmin']);
   Route::get("/deleteAdmin/{adminId}", [AdminsController::class,'deleteAdmin']);

   
   //profiles
   Route::get("/profiles/{profilesId?}", [ProfilesController::class,'showProfiles'])->name('profiles');
   Route::get("/addorEditProfile/{profilesId?}", [ProfilesController::class,'showAddorEditProfile'])->name('addorEditProfile');
   Route::post("/addorEditProfile/{profilesId?}", [ProfilesController::class,'addorEditProfile']);
   Route::get("/deleteProfile/{profilesId}", [ProfilesController::class,'deleteProfile']);

   


   // Cores
   Route::get("/countries", [WebsiteCoresControllers::class,'showCountries'])->name('countries');
   Route::post("/addCountry", [WebsiteCoresControllers::class,'addCountry']);
   Route::get("/deleteCountry/{countryId}", [WebsiteCoresControllers::class,'deleteCountry']);

   Route::get("/profileTypes", [WebsiteCoresControllers::class,'showProfileTypes'])->name('profileTypes');
   Route::post("/addprofileType", [WebsiteCoresControllers::class,'addprofileType']);
   Route::get("/deleteProfileType/{profileTypeId}", [WebsiteCoresControllers::class,'deleteProfileType']);

   Route::get("/fields", [WebsiteCoresControllers::class,'showFields'])->name('fields');
   Route::post("/addfield", [WebsiteCoresControllers::class,'addField']);
   Route::get("/deletefield/{fieldId}", [WebsiteCoresControllers::class,'deleteField']);

   Route::get("/specialties", [WebsiteCoresControllers::class,'showspecialties'])->name('subjects');
   Route::post("/addSpecial", [WebsiteCoresControllers::class,'addSpecial']);
   Route::get("/deleteSpecial/{specialId}", [WebsiteCoresControllers::class,'deleteSpecial']);

   Route::get("/packages", [WebsiteCoresControllers::class,'showPackages'])->name('packages');
   Route::post("/addPackages", [WebsiteCoresControllers::class,'addPackages']);

// Reports

Route::get("/profileReports", [ReportsController::class,'showProfileReports'])->name('profileReports');
Route::get("/deleteProfileReport/{reportId}", [ReportsController::class,'deleteProfileReport']);
Route::get("/deleteProfile_Reporter/{profileId}", [ReportsController::class,'deleteProfile_Reporter']);
Route::get("/deleteUser_Reporter/{profileId}", [ReportsController::class,'deleteUser_Reporter']);

Route::get("/commentsReports", [ReportsController::class,'showCommentsReports'])->name('commentsReports');
Route::get("/deleteCommentReport/{Id}", [ReportsController::class,'deleteCommentReport']);
Route::get("/deleteComment_Reporter/{Id}", [ReportsController::class,'deleteComment_Reporter']);
Route::get("/deleteUserOfComment_Reporter/{Id}", [ReportsController::class,'deleteUserOfComment_Reporter']);


   
// Payments and ContactUs

Route::get("/contactUs", [PaymentsAndContactUsControllers::class,'showContactUs'])->name('contactUs');
Route::get("/deleteContactUs/{contactUsId}", [PaymentsAndContactUsControllers::class,'deleteContactUs']);



//website Configs.
Route::get("/websiteConfigs", [WebsiteConfigController::class,'showWebsiteConfigs'])->name('websiteConfigs');
Route::post("/websiteConfigs", [WebsiteConfigController::class,'addWebsiteConfigs']);

Route::get("/slider", [WebsiteConfigController::class,'showSlider'])->name('slider');
Route::post("/addSlider", [WebsiteConfigController::class,'addSlider']);
Route::get("/deleteSlider/{sliderId}", [WebsiteConfigController::class,'deleteSlider']);

Route::get("/availbalePayments", [WebsiteConfigController::class,'showAvailbalePayments'])->name('availbalePayments');
Route::post("/availbalePayments", [WebsiteConfigController::class,'addAvailbalePayments']);
Route::get("/deleteAvailbalepayment/{availbalepaymentId}", [WebsiteConfigController::class,'deleteAvailbalepayment']);


});

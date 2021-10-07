<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\WebsiteCoresControllers;
use App\Http\Controllers\Admin\PaymentsAndContactUsControllers;
use App\Http\Controllers\Admin\ReportsController;
use App\Http\Controllers\Admin\WebsiteConfigController;

// Admin Routes
Route::prefix("admin")->group(function(){
   
   Route::get("/", [IndexController::class,'showIndex'])->name('index');

   Route::get("/users", [UsersController::class,'showUsers'])->name('users');
   Route::get("/deleteUser/{userId}", [UsersController::class,'deleteUser']);
   Route::get("/addorEditUser/{userId?}", [UsersController::class,'showAddOrEditUser'])->name('addOrEditUser');
   Route::post("/addorEditUser/{userId?}", [UsersController::class,'addorEditUser']);


   // Cores
   Route::get("/countries", [WebsiteCoresControllers::class,'showCountries'])->name('countries');
   Route::post("/addCountry", [WebsiteCoresControllers::class,'addCountry']);
   Route::get("/deleteCountry/{countryId}", [WebsiteCoresControllers::class,'deleteCountry']);

   Route::get("/profileTypes", [WebsiteCoresControllers::class,'showProfileTypes'])->name('profileTypes');
   Route::post("/addprofileType", [WebsiteCoresControllers::class,'addprofileType']);
   Route::get("/deleteProfileType/{profileTypeId}", [WebsiteCoresControllers::class,'deleteProfileType']);

   Route::get("/specialties", [WebsiteCoresControllers::class,'showSpecialties'])->name('specialties');
   Route::post("/addSpecialties", [WebsiteCoresControllers::class,'addSpecialties']);
   Route::get("/deleteSpecialties/{SpecialtiesId}", [WebsiteCoresControllers::class,'deleteSpecialties']);

   Route::get("/subjects", [WebsiteCoresControllers::class,'showSubjects'])->name('subjects');
   Route::post("/addSubject", [WebsiteCoresControllers::class,'addSubject']);
   Route::get("/deleteSubject/{SubjectId}", [WebsiteCoresControllers::class,'deleteSubject']);

   Route::get("/packages", [WebsiteCoresControllers::class,'showPackages'])->name('subjects');
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


   
});

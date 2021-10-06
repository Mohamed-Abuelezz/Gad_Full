<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\WebsiteCoresControllers;
use App\Http\Controllers\Admin\PaymentsAndContactUsControllers;

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

// Payments and ContactUs

Route::get("/contactUs", [PaymentsAndContactUsControllers::class,'showContactUs'])->name('contactUs');
Route::get("/deleteContactUs/{contactUsId}", [PaymentsAndContactUsControllers::class,'deleteContactUs']);


   
});

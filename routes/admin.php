<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\WebsiteCoresControllers;

// Admin Routes
Route::prefix("admin")->group(function(){
   
   Route::get("/", [IndexController::class,'showIndex'])->name('index');

   Route::get("/users", [UsersController::class,'showUsers'])->name('users');
   Route::get("/deleteUser/{userId}", [UsersController::class,'deleteUser']);
   Route::get("/addorEditUser/{userId?}", [UsersController::class,'showAddOrEditUser'])->name('addOrEditUser');
   Route::post("/addorEditUser/{userId?}", [UsersController::class,'addorEditUser']);

   Route::get("/countries", [WebsiteCoresControllers::class,'showCountries'])->name('countries');
   Route::post("/addCountry", [WebsiteCoresControllers::class,'addCountry']);
   Route::get("/deleteCountry/{countryId}", [WebsiteCoresControllers::class,'deleteCountry']);




});

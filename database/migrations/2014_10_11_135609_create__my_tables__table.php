<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

     /////////////////////////// Admins Table

      Schema::create('admins', function (Blueprint $table) {
         $table->bigIncrements('id');
         $table->string('name',100);
         $table->string('email')->unique();
         $table->string('password',255);
         $table->rememberToken();
         $table->timestamps();
     });
 



     /////////////////////////// Countries Table
   Schema::create('Countries', function (Blueprint $table) {
    $table->id();
    $table->string('name_ar');
    $table->string('name_en');
    $table->double('lat');
    $table->double('lng');

    $table->timestamps();
});

   /////////////////////////// Users Table
   Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->string('image')->nullable();
    $table->timestamp('email_verified_at')->nullable();
    $table->string('password');
    $table->foreignId('country_id')->constrained('Countries');
    $table->rememberToken();
    $table->timestamps();
});

   /////////////////////////// Education_Stages Table
   Schema::create('Education_Stages', function (Blueprint $table) {
    $table->id();
    $table->string('title_ar');
    $table->string('title_en');
    $table->foreignId('country_id')->constrained('Countries')->onUpdate('cascade')->onDelete('cascade');;
   $table->timestamps();

});


   /////////////////////////// Scientific Articles Table
   Schema::create('Scientific_Articles', function (Blueprint $table) {
    $table->id();
    $table->string('title_ar');
    $table->string('title_en');
    $table->foreignId('education_stage_id')->constrained('Education_Stages')->onUpdate('cascade')->onDelete('cascade');;
   $table->timestamps();

});
/////////////////////////// Subscribers Type Table
Schema::create('Subscribers_Type', function (Blueprint $table) {
    $table->id();
    $table->string('title_ar');
    $table->string('title_en');
   $table->timestamps();

});

   /////////////////////////// Profile Table
   Schema::create('Profiles', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');;
    $table->string('display_name');
    $table->string('cover_image');
    $table->foreignId('subscriber_type_id')->constrained('Subscribers_Type')->onUpdate('cascade')->onDelete('cascade');;
    $table->string('address');
    $table->double('lat');
    $table->double('lng');
    $table->string('mobile_number');
    $table->longText('person_bio');
    $table->longText('education_bio');

   $table->timestamps();

});




   /////////////////////////// Profile Scientific Articles  Table
   Schema::create('Profile_Scientific_Articles', function (Blueprint $table) {
    $table->id();
    $table->foreignId('profile_id')->constrained('Profiles')->onUpdate('cascade')->onDelete('cascade');;
    $table->foreignId('Scientific_Articles_id')->constrained('Scientific_Articles')->onUpdate('cascade')->onDelete('cascade');;


   $table->timestamps();

});



   /////////////////////////// Configs Offers Table
   Schema::create('Configs_Offers', function (Blueprint $table) {
    $table->id();
    $table->string('price_ar');
    $table->string('price_en');
    $table->string('desc_ar');
    $table->string('desc_en');
    $table->integer('take_long');
    $table->string('image');


   $table->timestamps();

});


   /////////////////////////// Profiles Offers Subscribers Table
   Schema::create('Profiles_Offers_Subscribers', function (Blueprint $table) {
    $table->id();
    $table->foreignId('profile_id')->constrained('Profiles')->onUpdate('cascade')->onDelete('cascade');;
    $table->foreignId('config_offer_id')->constrained('Configs_Offers')->onUpdate('cascade')->onDelete('cascade');;
    $table->timestamp('starts_at');
    $table->timestamp('finished_at');



   $table->timestamps();

});


 /////////////////////////// Configs Slider Table
 Schema::create('Configs_Slider', function (Blueprint $table) {
    $table->id();
    $table->string('title_ar');
    $table->string('title_en');
    $table->string('descrption_ar');
    $table->string('descrption_en');
    $table->string('image');





   $table->timestamps();

});

 /////////////////////////// Configs Website Views Table
 Schema::create('Configs_Website_Views', function (Blueprint $table) {
   $table->id();






  $table->timestamps();

});



   /////////////////////////// Favourites Profile Table
   Schema::create('Favourites_Profile', function (Blueprint $table) {
      $table->id();
    $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');;
    $table->foreignId('profile_id')->constrained('Profiles')->onUpdate('cascade')->onDelete('cascade');;
  
  
     $table->timestamps();
  
   });



   /////////////////////////// Comments Profile Table
   Schema::create('Comments_Profiles', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');;
    $table->foreignId('profile_id')->constrained('Profiles')->onUpdate('cascade')->onDelete('cascade');;
    $table->longText('comment');

  
     $table->timestamps();
  
   });

   /////////////////////////// Contact Us Table
   Schema::create('Contact_Us', function (Blueprint $table) {
      $table->id();
   //   $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade')->nullable();
      $table->string('name');
      $table->string('email');
      $table->string('phone');
      $table->string('message');
  
    
       $table->timestamps();
    
     });


        /////////////////////////// Profile Rates Table
   Schema::create('Profile_Rates', function (Blueprint $table) {
      
      $table->id();
      $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');;
      $table->foreignId('profile_id')->constrained('Profiles')->onUpdate('cascade')->onDelete('cascade');;
      $table->integer('rate');
  
     $table->timestamps();
  
  });
  
   

   /////////////////////////// Profile education Stages Table
   Schema::create('Profile_education_stages', function (Blueprint $table) {
      
      $table->id();
      $table->foreignId('profile_id')->constrained('Profiles')->onUpdate('cascade')->onDelete('cascade');;
      $table->foreignId('Education_Stages_id')->constrained('Education_Stages')->onUpdate('cascade')->onDelete('cascade');;
  
  
     $table->timestamps();
  
  });




        /////////////////////////// Profile Views Table
        Schema::create('Profile_Views', function (Blueprint $table) {
      
         $table->id();
         $table->string('user_ip');
         $table->foreignId('profile_id')->constrained('Profiles')->onUpdate('cascade')->onDelete('cascade');;
     
        $table->timestamps();
     
     });


        /////////////////////////// Profile Views Table
        Schema::create('Subscribe_Request', function (Blueprint $table) {
      
         $table->id();
         $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');;
         $table->foreignId('profile_id')->constrained('Profiles')->onUpdate('cascade')->onDelete('cascade');;
         $table->foreignId('offer_id')->constrained('Configs_Offers')->onUpdate('cascade')->onDelete('cascade');;
         $table->string('phone');
     
         $table->timestamps();
     
     });


}
  
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('Subscribe_Request');
      Schema::dropIfExists('Profile_Views');
        Schema::dropIfExists('Profile_education_stages');
        Schema::dropIfExists('Profile_Rates');
        Schema::dropIfExists('Contact_Us');
        Schema::dropIfExists('Comments_Profiles');
        Schema::dropIfExists('Favourites_Profile');
        Schema::dropIfExists('Configs_Website_Views');
        Schema::dropIfExists('Configs_Slider');
        Schema::dropIfExists('Profiles_Offers_Subscribers');
        Schema::dropIfExists('Configs_Offers');
        Schema::dropIfExists('Profile_Scientific_Articles');
        Schema::dropIfExists('Profiles');
        Schema::dropIfExists('Subscribers_Type');
        Schema::dropIfExists('Scientific_Articles');
        Schema::dropIfExists('Education_Stages');
        Schema::dropIfExists('users');
        Schema::dropIfExists('Countries');
    }
}

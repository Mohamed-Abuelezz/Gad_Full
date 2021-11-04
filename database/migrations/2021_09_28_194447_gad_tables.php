<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GadTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Countries_Table
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->string('name_en');
            $table->timestamps();
        });

        // Users_Table
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('image');
            $table->foreignId('country_id')
                ->constrained('countries')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

                // Admins_Table
                Schema::create('admins', function (Blueprint $table) {
                    $table->id();
                    $table->string('name');
                    $table->string('email')->unique();
                    $table->string('password');
                    $table->rememberToken();
                    $table->timestamps();
                });

        // profiles_type_Table
        Schema::create('profiles_type', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->string('name_en');
            $table->timestamps();
        });

        // fields_Table
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->string('name_en');

            $table->foreignId('profiles_type_id')
                ->constrained('profiles_type')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('country_id')
                ->constrained('countries')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });


        // specialties_Table
        Schema::create('specialties', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->string('name_en');

            $table->foreignId('field_id')
                ->constrained('fields')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });


        // profiles_Table
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('users_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('display_name');

            $table->string('image_cover');

            $table->foreignId('profiles_type_id')
                ->constrained('profiles_type')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('email');
            $table->string('phone');
            $table->double('lat');
            $table->double('lng');
            $table->string('bio');
            $table->longText('more_information');


            $table->timestamps();
        });



        // profiles_comments_Table
        Schema::create('profiles_comments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('users_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');


            $table->foreignId('profiles_id')
                ->constrained('profiles')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('comment');


            $table->timestamps();
        });


        // specialties_profiles_Table
        Schema::create('specialties_profiles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('specialties_id')
                ->constrained('specialties')
                ->onUpdate('cascade')
                ->onDelete('cascade');


            $table->foreignId('profiles_id')
                ->constrained('profiles')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });


        // fields_profiles_Table
        Schema::create('fields_profiles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('field_id')
                ->constrained('fields')
                ->onUpdate('cascade')
                ->onDelete('cascade');


            $table->foreignId('profiles_id')
                ->constrained('profiles')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });

        // profiles_views_Table
        Schema::create('profiles_views', function (Blueprint $table) {
            $table->id();

            $table->string('user_ipAddress');

            $table->foreignId('profiles_id')
                ->constrained('profiles')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });


        //favourite_profiles_Table
        Schema::create('favourite_profiles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('users_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');


            $table->foreignId('profiles_id')
                ->constrained('profiles')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });


        //contactUs_Table
        Schema::create('contact_Us', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->longText('msg');

            $table->timestamps();
        });


        //packages_Table
        Schema::create('packages', function (Blueprint $table) {
            $table->id();

            $table->string('name_ar');
            $table->string('name_en');
            $table->string('price');
            $table->string('take_long');

            $table->timestamps();
        });

        //profiles_reports_Table
        Schema::create('profiles_reports', function (Blueprint $table) {
            $table->id();

            $table->foreignId('users_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('profile_id')
                ->constrained('profiles')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });


        //comments_reports_Table
        Schema::create('comments_reports', function (Blueprint $table) {
            $table->id();

            $table->foreignId('profile_id')
                ->constrained('profiles')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('profiles_comments_id')
                ->constrained('profiles_comments')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });


        // profiles_rates_Table
        Schema::create('profiles_rates', function (Blueprint $table) {
            $table->id();

            $table->foreignId('users_id')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');


            $table->foreignId('profiles_id')
                ->constrained('profiles')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->integer('rate');


            $table->timestamps();
        });

///////////////////////////////////////////////////////////
                // website_views_Table
                Schema::create('website_views', function (Blueprint $table) {
                    $table->id();
        
                    $table->string('user_ipAddress');
                
                    $table->timestamps();
                });

        //websiteConfigs_Table
        Schema::create('websiteConfigs', function (Blueprint $table) {
            $table->id();
            $table->string('website_name_ar');
            $table->string('website_name_en');
            $table->string('website_logo');
            $table->string('charset');
            $table->string('author');
            $table->longText('description_ar');
            $table->longText('description_en');
            $table->string('keywords');
            $table->string('ourMessage_title_ar');
            $table->string('ourMessage_title_en');
            $table->longText('ourMessage_desc_ar');
            $table->longText('ourMessage_desc_en');
            $table->timestamps();
        });

        //sliders_Table
        Schema::create('websiteConfigs_sliders', function (Blueprint $table) {
            $table->id();

            $table->string('title_ar');
            $table->string('title_en');
            $table->longText('desc_ar');
            $table->longText('desc_en');
            $table->longText('image');

            $table->timestamps();
        });

        //availbalePayments_Table
        Schema::create('websiteConfigs_availbalePayments', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('image');

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
        //
        Schema::dropIfExists('profiles_rates');
        Schema::dropIfExists('websiteConfigs_availbalePayments');
        Schema::dropIfExists('websiteConfigs_sliders');
        Schema::dropIfExists('websiteConfigs');
        Schema::dropIfExists('website_views');
        Schema::dropIfExists('comments_reports');
        Schema::dropIfExists('profiles_reports');
        Schema::dropIfExists('packages');
        Schema::dropIfExists('contact_Us');
        Schema::dropIfExists('favourite_profiles');
        Schema::dropIfExists('profiles_views');
        Schema::dropIfExists('fields_profiles');
        Schema::dropIfExists('specialties_profiles');
        Schema::dropIfExists('profiles_comments');
        Schema::dropIfExists('profiles');
        Schema::dropIfExists('specialties');
        Schema::dropIfExists('fields');
        Schema::dropIfExists('profiles_type');
        Schema::dropIfExists('users');
        Schema::dropIfExists('countries');
    }
}

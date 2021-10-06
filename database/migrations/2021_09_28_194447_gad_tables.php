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

        // profiles_type_Table
        Schema::create('profiles_type', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->string('name_en');
            $table->timestamps();
        });

        // specialties_Table
        Schema::create('specialties', function (Blueprint $table) {
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


        // subjects_Table
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->string('name_en');

            $table->foreignId('specialties_id')
                ->constrained('specialties')
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


        // subjects_profiles_Table
        Schema::create('subjects_profiles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('subjects_id')
                ->constrained('subjects')
                ->onUpdate('cascade')
                ->onDelete('cascade');


            $table->foreignId('profiles_id')
                ->constrained('profiles')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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





    }






    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('contact_Us');
        Schema::dropIfExists('favourite_profiles');
        Schema::dropIfExists('profiles_views');
        Schema::dropIfExists('specialties_profiles');
        Schema::dropIfExists('subjects_profiles');
        Schema::dropIfExists('profiles_comments');
        Schema::dropIfExists('profiles');
        Schema::dropIfExists('subjects');
        Schema::dropIfExists('specialties');
        Schema::dropIfExists('profiles_type');
        Schema::dropIfExists('users');
        Schema::dropIfExists('countries');
    }
}

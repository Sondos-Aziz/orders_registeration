<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('firstName_ar');
            $table->string('middleName_ar');
            $table->string('lastName_ar');
            $table->string('firstName_en');
            $table->string('middleName_en');
            $table->string('lastName_en');
            $table->string('slug_en');
            $table->string('slug_ar');
            $table->integer('identity')->unique();
            $table->date('dateOfBirth');
            // $table->integer('qualification_id')->unique(); // reference to qualification table 
            $table->integer('currentJob_id')->nullable();// reference to Current_job table 
            $table->integer('specialization_id');   // reference to Specialization table    
             $table->string('workplace')->nullable();   
             $table->integer('mobile')->unique();
             $table->integer('mobileAlternative')->unique()->nullable();
             $table->integer('familyType_id')->nullable(); // reference to familyType table 
             $table->integer('neighborhoods_id');  // references to neighborhoods
             $table->string('otherPlace')->nullable();   
             $table->string('nationality')->nullable();   
             $table->integer('social_status_id')->nullable();   
             $table->string('sex')->nullable();   
             $table->integer('individuals_no')->nullable();   
             $table->integer('placeOfBirth_id')->nullable();    // CITY table
             $table->string('facebookUrl')->nullable();    // CITY table
            $table->boolean('is_super');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiplomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diplomas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('orderFees');
            $table->double('diplomaFees');
            $table->integer('orderFeesCurrancy_id'); // Currancy table 
            $table->integer('diplomaFeesCurrancy_id');
            $table->integer('diplomaType_id'); //diploma_types
            $table->integer('hour');
            $table->integer('meetingNoPerWeek');
            $table->integer('daysPerMeeting');
            $table->longText('target');
            $table->longText('Skills');
            $table->longText('fieldsOfGraduation');
            $table->string('place');
            $table->longText('features');
            $table->longText('regRequirments');
            $table->longText('credits'); //اللاعتمادات
            /* for course الدورات */
            $table->longText('intro');
            $table->longText('content');
            $table->longText('trainningCourse');
          
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
        Schema::dropIfExists('diplomas');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiplomaUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // contain marks table 
        Schema::create('diploma_user', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('diploma_id')->unsigned();

            // $table->unsignedDouble('beforEx1')->nullable();
            // $table->unsignedDouble('beforEx2')->nullable();
            // $table->unsignedDouble('afterEx1')->nullable();
            // $table->unsignedDouble('afterEx2')->nullable();
            // $table->unsignedDouble('midTerm1')->nullable();
            // $table->unsignedDouble('midTerm2')->nullable();
            // $table->integer('attendensNo')->unsigned()->nullable();
            // $table->unsignedDouble('finalTerm')->nullable();
            // $table->unsignedDouble('finalLap')->nullable();
            // $table->unsignedDouble('finalTheoretical')->nullable();
            // $table->unsignedDouble('totalMark')->nullable();
            // $table->text('noticeForMarks')->nullable();
            // $table->unsignedInteger('certificateNo')->nullable();
            // $table->timestamp('certificateDeliveryDate')->nullable();

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
        Schema::dropIfExists('diploma_user');
    }
}

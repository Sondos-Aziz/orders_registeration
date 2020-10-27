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

            $table->double('beforEx1')->unsigned()->nullable();
            $table->double('beforEx2')->unsigned()->nullable();
            $table->double('afterEx1')->unsigned()->nullable();
            $table->double('afterEx2')->unsigned()->nullable();
            $table->double('midTerm1')->unsigned()->nullable();
            $table->double('midTerm2')->unsigned()->nullable();
            $table->integer('attendensNo')->unsigned()->nullable();
            $table->double('finalTerm')->unsigned()->nullable();
            $table->double('finalLap')->unsigned()->nullable();
            $table->double('finalTheoretical')->unsigned()->nullable();
            $table->double('total')->unsigned()->nullable();
            $table->text('notice')->unsigned()->nullable();
            $table->integer('certificateNo')->unsigned()->nullable();
            $table->timestamp('certificateDeliveryDate')->unsigned()->nullable();

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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communications', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('diploma_id')->unsigned();
            $table->integer('employee_id')->unsigned();

            $table->string('subject');
            $table->boolean('callType'); // صادر ام وارد 
            $table->integer('comType_id');   // زيارة ام تلفون 
            $table->timestamp('callDate');
            $table->integer('callStatus_id');   //callStatus

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
        Schema::dropIfExists('communications');
    }
}

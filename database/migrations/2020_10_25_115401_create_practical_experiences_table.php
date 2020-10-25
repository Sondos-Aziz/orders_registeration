<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticalExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practical_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('workplace');
            $table->date('from');
            $table->date('to');
            $table->string('job');
            $table->double('salary');
            $table->string('reason_for_leaving');
            $table->integer('user_id');
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
        Schema::dropIfExists('practical_experiences');
    }
}

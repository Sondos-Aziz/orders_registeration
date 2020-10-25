<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id"); // user table 
            $table->integer("diploma_id"); // diploma table 
            $table->integer("knowledgeWays_id"); // knowledge_ways table 
            $table->double('total');
            $table->integer("totalCurrancy_id"); // currancy table 
            $table->integer("desire_id"); // desire table 
            $table->integer("paymentType_id"); // paymentType table 
            $table->integer("option1"); // diploma table 
            $table->integer("option2"); // diploma table 
            $table->boolean("status"); 
            $table->integer("employee_id");
            $table->date('from')->nullable();
            $table->date('to')->nullable();
            $table->integer("organiziation_id")->nullable(); // paymentType table 
            $table->integer("volunteering_id")->nullable(); // diploma table 

            $table->date('reservationFeesDate');
            $table->double("reservationFees"); // currancy table 
            $table->integer("reservationFeesCurrancy_id"); // currancy table 
            $table->string("orderPaper"); 
            $table->string("notices"); 

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
        Schema::dropIfExists('orders');
    }
}

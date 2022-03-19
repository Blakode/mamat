<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // this handles the orders 
        Schema::create('orderDetails', function(Blueprint $table){
            $table->increments('id');
            $table->integer('userId'); // associate a user to an orders
            $table->string('OrderID');
            $table->string('destination'); 
        });

        // Schema::create('bookings', function(Blueprint $table){

        // }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

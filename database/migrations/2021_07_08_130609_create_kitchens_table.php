<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKitchensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            // $table->id();
            $table->increments('id'); 
            $table->string('title');
            $table->string('description');
            $table->string('quantity');
            $table->string('category');
            $table->double('price');
            $table->boolean('status');
            $table->timestamps();
            $table->string('image_path'); 
        });


    //     Schema::create('category', function(Blueprint $table){
    //         $table->string('food');
    //         $table->string('drinks');
    //  }); 

     Schema::create('drinks', function(Blueprint $table){
        $table->increments('id'); 
        $table->string('title');
        $table->string('description'); 
        $table->string('quantity');
        $table->float('price'); 
        $table->double('units');
        $table->timestamps(); 
        $table->string('customs')->nullable; 
        
        });
    }
   


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kitchens', 'drinks');
    }
}

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
            $table->string('Sname');
            $table->string('Lname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('address');
            $table->string('gender');
            $table->string('town');
            $table->string('state');
            $table->boolean('status');
            $table->timestamps();
            $table->rememberToken();
            
        });


        Schema::create('admin', function(Blueprint $table){

            $table->id();
            $table->string('uname');
            $table->string('fname');
            $table->string('lname');
            $table->string('type_id')->primary();
            $table->longtext('password');
            $table->timestamp('last_login'); 
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSittersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitters', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('email')->unique();
          $table->string('password');
          $table->string('phone_number');
          $table->string('whatsapp_number');
         
          $table->string('res_address');
          $table->string('city');
          $table->string('postcode');
          $table->string('dogs');
          $table->string('outdoor');
          $table->string('dogwalks');
          $table->string('food');
          $table->string('bio');
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
        Schema::dropIfExists('sitters');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Campus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('registrationId');
            $table->text('first_name');
           
            $table->text('last_name');
            $table->text('father_name');
            $table->text('mother_name');
            $table->text('institution');
            $table->text('date_of_birth');
          
            $table->text('location');
            $table->bigInteger('whatsappNo');
           
            $table->string('email');
            $table->bigInteger('phone');
            $table->text('photo_id')->nullable();
            $table->text('identification_id')->nullable();
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
        //
    }
}

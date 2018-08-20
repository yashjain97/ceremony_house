<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('registrationId');
            $table->text('first_name');
            $table->text('name2')->nullable();
            $table->text('dob2')->nullable();
            $table->text('name3')->nullable();
            $table->text('dob3')->nullable();
            $table->text('last_name');
            $table->text('father_name');
            $table->text('mother_name');
            $table->text('date_of_birth');
            $table->text('agecategory');
            $table->text('event');
            $table->text('location');
            $table->bigInteger('whatsappNo');
            $table->text('howmany');
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
        Schema::dropIfExists('registers');
    }
}

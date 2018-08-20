<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Teamregister extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->text('member1')->nullable();
            $table->text('memdob1')->nullable();
           
            $table->text('member2')->nullable();
            $table->text('memdob2')->nullable();
            $table->text('member3')->nullable();
            $table->text('memdob3')->nullable();
            $table->text('member4')->nullable();
            $table->text('memdob4')->nullable();
            $table->text('member5')->nullable();
            $table->text('memdob5')->nullable();
            $table->text('member6')->nullable();
            $table->text('memdob6')->nullable();
            $table->text('member7')->nullable();
            $table->text('memdob7')->nullable();
            $table->text('member8')->nullable();
            $table->text('memdob8')->nullable();
            $table->text('member9')->nullable();
            $table->text('memdob9')->nullable();
            $table->text('member10')->nullable();
            $table->text('memdob10')->nullable();
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

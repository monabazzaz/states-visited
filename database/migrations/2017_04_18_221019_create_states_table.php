<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration
{

    /*
    Migration for the states table and values
    */
    public function up()
    {
      Schema::create('states', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('year');
        $table->string('days');
        $table->string('notes');
        $table->string('rating');
        $table->timestamps();
      });
    }


    /*
    Drops the states table into the database if the table exists
    */
    public function down()
    {
      Schema::dropIfExists('states');
    }
}

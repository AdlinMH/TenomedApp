<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCafesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cafes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser');
            $table->string('name');
            $table->string('address');
            $table->string('long');
            $table->string('lat');
            $table->string('images')->nullable();
            $table->string('rating')->nullable();
            $table->string('phone')->nullable();
            $table->string('more')->nullable();
            $table->string('OpeningDays')->nullable();
            $table->string('openingHours')->nullable();
            $table->integer('seat')->nullable();
            $table->integer('status')->nullable();
            $table->string('desc')->nullable();
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
        Schema::drop('cafes');
    }
}

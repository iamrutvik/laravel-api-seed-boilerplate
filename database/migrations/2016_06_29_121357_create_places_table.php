<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table){
            $table->increments('id');
            $table->string('google_place_id');
            $table->float('lat');
            $table->float('long');
            $table->integer('postal_code');
            $table->string('country');
            $table->string('country_code');
            $table->string('city');
            $table->string('locality');
            $table->string('route');
            $table->string('address');
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
        Schema::drop('places');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExhibitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exhibitors', function (Blueprint $table) {
            $table->id();

            $table->string('firstname');
            $table->string('name');
            $table->string('email');
            $table->string('telephone');
            $table->string('country');
            $table->string('postalCode');
            $table->string('location');
            $table->string('website');
            $table->string('keyword');
            $table->text('informations');

            $table->boolean('agree');
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
        Schema::dropIfExists('exhibitors');
    }
}
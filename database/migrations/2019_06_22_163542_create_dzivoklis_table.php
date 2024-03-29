<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDzivoklisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dzivoklis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('iziretajs_id');
            $table->string('city');
            $table->string('street');
            $table->integer('floor');
            $table->unsignedInteger('apartment_no');
            $table->unsignedInteger('rooms');
            $table->text('description');
            $table->foreign('iziretajs_id')->references('id')->on('iziretajs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('dzivoklis');
        Schema::enableForeignKeyConstraints();
    }
}

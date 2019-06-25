<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtsauksmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atsauksme', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedBigInteger('dzivoklis_id');
            $table->unsignedBigInteger('iretajs_id');
            $table->text('review');
            $table->integer('rating');
            $table->foreign('dzivoklis_id')->references('id')->on('dzivoklis');
            $table->foreign('iretajs_id')->references('id')->on('iretajs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atsauksme');
    }
}

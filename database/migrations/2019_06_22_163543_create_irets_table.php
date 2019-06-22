<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIretsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('irets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('dzivoklis_id');
            $table->unsignedBigInteger('iretajs_id');
            $table->date('no');
            $table->date('lidz');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('irets');
        Schema::enableForeignKeyConstraints();
    }
}

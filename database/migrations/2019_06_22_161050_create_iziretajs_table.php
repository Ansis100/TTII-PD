<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIziretajsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iziretajs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('first_name');
            $table->string('city')->nullable();
            $table->string('phone')->nullable();
            $table->string('email');
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
        Schema::dropIfExists('iziretajs');
        Schema::enableForeignKeyConstraints();
    }
}

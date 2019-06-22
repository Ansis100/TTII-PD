<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDzivoklisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dzivoklis', function(Blueprint $table)
		{
			$table->integer('dzivoklis_id', true);
			$table->integer('iziretajs_id');
			$table->integer('iretajs_id');
			$table->string('city', 50);
			$table->string('street', 50);
			$table->integer('floor');
			$table->integer('apartment_nr');
			$table->integer('rooms');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dzivoklis');
	}

}

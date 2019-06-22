<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIziretajsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('iziretajs', function(Blueprint $table)
		{
			$table->integer('iziretajs_id', true);
			$table->string('first_name', 50);
			$table->string('phone', 10);
			$table->string('email', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iziretajs');
	}

}

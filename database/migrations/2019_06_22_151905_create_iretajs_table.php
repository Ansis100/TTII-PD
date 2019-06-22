<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIretajsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('iretajs', function(Blueprint $table)
		{
			$table->integer('iretajs_id', true);
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
		Schema::drop('iretajs');
	}

}

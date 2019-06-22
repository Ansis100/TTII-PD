<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIretsDzivoklisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('irets_dzivoklis', function(Blueprint $table)
		{
			$table->integer('irets_dzivoklis_id', true);
			$table->integer('dzivoklis_id');
			$table->integer('iretajs_id');
			$table->date('iretsno');
			$table->date('iretslidz');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('irets_dzivoklis');
	}

}

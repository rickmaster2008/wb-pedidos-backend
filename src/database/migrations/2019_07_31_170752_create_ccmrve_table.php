<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCcmrveTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ccmrve', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('MCODRVE', 2);
			$table->string('MDESCRIP', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ccmrve');
	}

}

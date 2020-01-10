<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticuloFamdfaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articulo_famdfa', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('mcodart', 16);
			$table->string('mcoddfa', 6);
			$table->string('MCODRVE', 2);
			$table->string('MCODCADI', 2);
			$table->string('MCONDPAGO', 2);
			$table->integer('MCANMIN')->nullable();
			$table->integer('MCANMAX')->nullable();
			$table->string('DESCRIP_DESCUENTO', 20);
			$table->string('MCODVEN', 6);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articulo_famdfa');
	}

}

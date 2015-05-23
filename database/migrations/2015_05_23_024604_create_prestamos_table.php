<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prestamos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha_prestamo');
			$table->date('fecha_devolucion');


			$table->integer('user_id')->unsigned();
			$table->integer('ejemplar_id')->unsigned();

			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('ejemplar_id')->references('id')->on('ejemplares');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prestamos');
	}

}

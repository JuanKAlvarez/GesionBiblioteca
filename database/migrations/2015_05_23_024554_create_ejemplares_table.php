<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEjemplaresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ejemplares', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('estado');

			$table->integer('libro_id')->unsigned();
			$table->integer('ubicacion_id')->unsigned();

			$table->foreign('libro_id')->references('id')->on('libros');
			$table->foreign('ubicacion_id')->references('id')->on('ubicaciones');
			
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ejemplares');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('libros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('isbn');
			$table->string('titulo');
			$table->string('edision');
			$table->string('paginas');
			$table->string('año');

			$table->integer('editorial_id')->unsigned();
			$table->integer('autor_id')->unsigned();
			$table->integer('tema_id')->unsigned();
			$table->integer('idioma_id')->unsigned();

			$table->foreign('editorial_id')->references('id')->on('editoriales');
			$table->foreign('autor_id')->references('id')->on('autores');
			$table->foreign('tema_id')->references('id')->on('temas');
			$table->foreign('idioma_id')->references('id')->on('idiomas');
			


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
		Schema::drop('libros');
	}

}

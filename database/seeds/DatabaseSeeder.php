<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		
		$this->call('AdminTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('UbicasionesTableSeeder');
		$this->call('EditorialesTableSeeder');
		$this->call('AutoresTableSeeder');
		$this->call('TemasTableSeeder');
		$this->call('IdiomasTableSeeder');
		$this->call('LibrosTableSeeder');
		$this->call('EjemplaresTableSeeder');
		$this->call('PrestamosTableSeeder');
	}

}

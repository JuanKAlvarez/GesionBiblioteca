<?php 

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PrestamosTableSeeder extends Seeder{
	

	public function run()
	{
		
		\DB::table('prestamos')->insert(array(
			
			'fecha_prestamo'	=>	'2015-05-26',
			'fecha_devolucion'	=>	'2015-06-02',
			'estado'			=>	'Normal',
			'user_id'			=>	1,
			'ejemplar_id'		=>	2

			));

		\DB::table('prestamos')->insert(array(
			
			'fecha_prestamo'	=>	'2015-04-24',
			'fecha_devolucion'	=>	'2015-05-01',
			'estado'			=>	'Retrasado',
			'user_id'			=>	2,
			'ejemplar_id'		=>	6

			));\DB::table('prestamos')->insert(array(
			
			'fecha_prestamo'	=>	'2015-04-24',
			'fecha_devolucion'	=>	'2015-05-01',
			'estado'			=>	'Retrasado',
			'user_id'			=>	2,
			'ejemplar_id'		=>	12

			));

		\DB::table('prestamos')->insert(array(
			
			'fecha_prestamo'	=>	'2015-05-26',
			'fecha_devolucion'	=>	'2015-06-02',
			'estado'			=>	'Normal',
			'user_id'			=>	1,
			'ejemplar_id'		=>	11

			));



	}
}
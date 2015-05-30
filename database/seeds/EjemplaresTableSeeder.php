<?php 

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EjemplaresTableSeeder extends Seeder{
	

	public function run()
	{
	$faker = Faker::create();
	
	for ($i=1; $i <= 100; $i++) { 

		for ($j=0; $j < 3; $j++) { 
			
			\DB::table('ejemplares')->insert(array(

					'estado'	=>	$faker->randomElement($array = array ('Disponible','Prestado')),
					'ubicacion_id'	=>	$faker->numberBetween($min = 1, $max = 5),
					'libro_id'	=>	$i,

				));

		}
		\DB::table('ejemplares')->insert(array(
				
				'estado'=>'Uso Interno',
				'ubicacion_id'	=>	$faker->numberBetween($min = 1, $max = 5),
				'libro_id'	=>	$i

				));

		\DB::table('ejemplares')->insert(array(
			
			'estado'=>'Uso Interno',
			'ubicacion_id'	=>	$faker->numberBetween($min = 1, $max = 5),
			'libro_id'	=>	$i

			));
	

	}



	}
}
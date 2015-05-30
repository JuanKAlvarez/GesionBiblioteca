<?php 

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LibrosTableSeeder extends Seeder{
	

	public function run()
	{
	$faker = Faker::create();
	

	for ($i=0; $i < 100; $i++) { 
		
		\DB::table('libros')->insert(array(

				'isbn'			=>	$faker->numberBetween($min = 1000000000, $max = 9999999999),
				'Titulo'		=>	$faker->company,
				'edision'		=>	$faker->numberBetween($min = 1, $max = 9),
				'paginas'		=>	$faker->numberBetween($min = 100, $max = 1000),
				'año'			=>	$faker->year($max = 'now'),
				'editorial_id'	=>	$faker->numberBetween($min = 1, $max = 5),
				'autor_id'		=>	$faker->numberBetween($min = 1, $max = 15),
				'tema_id'		=>	$faker->numberBetween($min = 1, $max = 9),
				'idioma_id'		=>	$faker->numberBetween($min = 1, $max = 8),
				

			));
	}



	}
}

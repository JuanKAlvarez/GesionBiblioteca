<?php 

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UbicasionesTableSeeder extends Seeder{
	

	public function run()
	{
	$faker = Faker::create();
	

	for ($i=0; $i < 5; $i++) { 

		
		\DB::table('ubicaciones')->insert(array(


				'ubicacion'	=>	'Secion No. '.$faker->randomDigit.' - Repisa No. '.$faker->randomDigit

			));
	}



	}
}
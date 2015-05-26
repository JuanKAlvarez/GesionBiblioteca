<?php 

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AutoresTableSeeder extends Seeder{
	

	public function run()
	{
	$faker = Faker::create();
	

	for ($i=0; $i < 15; $i++) { 

		
		\DB::table('autores')->insert(array(


				'name'	=>	$faker->name

			));
	}



	}
}
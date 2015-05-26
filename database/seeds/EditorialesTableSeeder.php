<?php 

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EditorialesTableSeeder extends Seeder{
	

	public function run()
	{
	$faker = Faker::create();
	

	for ($i=0; $i < 5; $i++) { 

		
		\DB::table('editoriales')->insert(array(

				'nombre'	=>	$faker->numerify('Editorial ##'),
				'ciudad'	=>	$faker->city,
				'telefono'	=>	$faker->numerify('(##) #######'),
				'direccion'	=>	$faker->streetAddress			

				));
	}



	}
}
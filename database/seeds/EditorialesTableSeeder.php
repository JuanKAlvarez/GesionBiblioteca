<?php 

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EditorialesTableSeeder extends Seeder{
	

	public function run()
	{
	$faker = Faker::create();
	

	for ($i=0; $i < 5; $i++) { 

		
		\DB::table('editoriales')->insert(array(

				'nombre'	=>	$faker->randomElement($array = array (
					'Centro de Publicaciones Académicas Corporación universitaria UNITEC',
					'Ecoe Ediciones',
					'Ediciones de la U',
					'Ediciones Elizcom',
					'Editorial El Manual Moderno Colombia',
					'Editorial La Oveja Negra Ltda.',
					'Editorial Politécnico Grancolombiano',
					'Editorial Pontificia Universidad Javeriana',
					'Fundación Colombiana de Trasplante de Médula Ósea',
					'Fundación Universitaria Colombo Internacional',
					'Fundación Universitaria del Área Andina',
					'Institución Universitaria Fundación Escuela Colombiana de Rehabilitación',
					'Instituto de Astrobiología de Colombia',
					'Instituto de Cultura de Cundinamarca',
					'Nueva Legislación Ltda.',
					'Siglo del Hombre Editores',
					'Taller de Edición-Rocca',
					'Universidad Cooperativa de Colombia',
					'Universidad de Ibagué',
					'Universidad de La Sabana',
					'Universidad de los Andes',
					'Universidad del Norte',
					'Universidad Nacional de Colombia'
					)),
				'ciudad'	=>	$faker->city,
				'telefono'	=>	$faker->numerify('(##) #######'),
				'direccion'	=>	$faker->streetAddress			

				));
	}



	}
}


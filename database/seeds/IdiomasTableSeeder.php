<?php 

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class IdiomasTableSeeder extends Seeder{
	

	public function run()
	{
		
		\DB::table('idiomas')->insert(array('idioma'=>'Español'));
		\DB::table('idiomas')->insert(array('idioma'=>'Ingles'));
		\DB::table('idiomas')->insert(array('idioma'=>'Arabe'));
		\DB::table('idiomas')->insert(array('idioma'=>'Italiano'));
		\DB::table('idiomas')->insert(array('idioma'=>'Catalan'));
		\DB::table('idiomas')->insert(array('idioma'=>'Portugues'));
		\DB::table('idiomas')->insert(array('idioma'=>'Frances'));
		\DB::table('idiomas')->insert(array('idioma'=>'Aleman'));


	}
}
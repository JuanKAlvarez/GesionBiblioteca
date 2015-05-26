<?php 

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TemasTableSeeder extends Seeder{
	

	public function run()
	{
		
		\DB::table('temas')->insert(array('tema'=>'Calculo'));
		\DB::table('temas')->insert(array('tema'=>'Desarrollo de Software'));
		\DB::table('temas')->insert(array('tema'=>'Algebra'));
		\DB::table('temas')->insert(array('tema'=>'Quimica'));
		\DB::table('temas')->insert(array('tema'=>'Electronica'));
		\DB::table('temas')->insert(array('tema'=>'Fisica'));
		\DB::table('temas')->insert(array('tema'=>'Lengua Materna'));
		\DB::table('temas')->insert(array('tema'=>'Psicologia'));
		\DB::table('temas')->insert(array('tema'=>'Anatomia'));

	}
}
<?php 

use Illuminate\Database\Seeder;


class AdminTableSeeder extends Seeder{
	

	public function run()
	{


	\DB::table('users')->insert(array(
		
			'name'			=>		'Manuel Blanco',
			'email'			=>		'JuanAlvarezCuartas@hotmail.com',
			'password'		=>		\Hash::make('123456'),
			'type'			=>		'admin',
			'descripcion'	=>		'Biblitecario',
			'telefono'		=>		'4530447',
			'direccion'		=>		'Av. 38 B Diag. 42 DD 43'

		));


	}
}
@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Instalación</div>

				<div class="panel-body">
					<h1>Notas para la ejecucion de la pagina Gestion de biblioteca</h1>

					<p>este proyecto fue diseñado con la ayuda del famework LARAVEL,
					por lotanto se puede correr en cualquier servidor que cuente con apache y php,
					se puede usar cualquie manejador de bases de datos como MySQL</p>

					<p>para conectar la base de datos , se deve ingresar las credenciales en el
					archivo ".env" en la raiz del proyecto</p>

					<p>ejemplo:</p>

					<p>
						DB_HOST=localhost				 	<br>
						DB_DATABASE=gestion-biblioteca 		<br>
						DB_USERNAME=root 					<br>
						DB_PASSWORD=123 					<br>
					</p>

					<p>Nota: <br>
					primero se debe de crear la base de datos, este proyecto esta configurado
					para trabajar en MySql con una base de datos llamada "gestion-biblioteca" ,
					se debe ingresar con el CMD en la carpeta del proyecto, 
					con  el comando:
					<br>
					si se trabaja con XAMPP, se ejecuta :
					</p>
					<p>cd ../../xampp/htdocs/GestionBiblioteca</p>
					<p>para crear las tablas y llenaarlas se deve ejecutar el siguiente
						comando en el CMD
					</p>
					<p>
						php artisan migrate:refresh --seed
					</p>
					<p>
						por ultimo se ingresa a la URL: localhoost/GestionBiblioteca/Public

					</p>
					<p>
						aparesera unaventana de bienvenida y se debe ingresar con:
					</p>

					<p>
					Correo: solinter@gmail.com <br>
					Contraseña: 123456
					</p>


						
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

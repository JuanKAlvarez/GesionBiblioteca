@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Usuarios</div>

				<div class="panel-body">
					Usted está en el sistema! como  <h1>administrador</h1>
					<?php 
						echo Form::text('username');
						echo Form::checkbox('name', 'value', true);
						echo Form::radio('name', 'value', true);
						echo Form::select('size', array('L' => 'Large', 'S' => 'Small'));

					 ?>


				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Usuarios</div>

				<div class="panel-body">
					<div>
						<a href="#" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#crearUserModal">Crear Usuario</a>
					</div>


					{!! $users->setPath('')->render() !!}
					<div class="table-responsive">
						<table class="table">
							<tr>
								<th class="">#</th>
								<th class="">NOMBRE</th>
								<th class="">EMAIL</th>
								<th class="">TIPO</th>
								<th class="">DESCRIPCION</th>
								<th class="">TELEFONO</th>
								<th class="">DIRECCION</th>
								<th class=""></th>
							</tr>
							@foreach($users as $user)
							<tr>
								<td class=""> {{$user->id}} </td>
								<td class=""> {{$user->name}} </td>
								<td class=""> {{$user->email}} </td>
								<td class=""> {{$user->type}} </td>
								<td class=""> {{$user->descripcion}} </td>
								<td class=""> {{$user->telefono}} </td>
								<td class=""> {{$user->direccion}} </td>
								<td class=""> x o </td>
							</tr>

							@endforeach
						</table>
					</div>
					{!! $users->setPath('')->render() !!}

				</div>
			</div>
		</div>
	</div>
</div>


<!-- Modal Crear Usuarios-->
<div class="modal fade" id="crearUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Crear Usuario</h4>
      </div>
      {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST', 'class' => 'form-horizontal' ]) !!}
	      <div class="modal-body">
		      <br>

		      <div class="for-grup">
		      	{!! Form::label('name', 'Nombre:',[	'class' => 'col-sm-2 control-label']) !!}
		      	<div class="col-sm-10">
		      		{!! Form::text('name','' ,[	'class' => 'form-control']) !!}
		      	</div>
		      </div>

		      <div class="for-grup">
		      	{!! Form::label('email', 'Correo:',[	'class' => 'col-sm-2 control-label']) !!}
		      	<div class="col-sm-10">
		      		{!! Form::text('email','' ,[	'class' => 'form-control']) !!}
		      	</div>
		      </div>

		      <div class="for-grup">
		      	{!! Form::label('password', 'Contraseña:',['class' => 'col-sm-2 control-label']) !!}
		      	<div class="col-sm-10">
		      		{!! Form::password('password',['class' => 'form-control']) !!}
		      	</div>
		      </div>

		      <div class="for-grup">
		      	{!! Form::label('type', 'Tipo:',['class' => 'col-sm-2 control-label']) !!}
		      	<div class="col-sm-10">
		      		{!! Form::select('type',[
			      		'user' => 'Usuario',
			      		'admin' => 'Administrador'
			      		],'user',['class' => 'form-control']) !!}
		      	</div>
		      </div>

		      <div class="for-grup">
		      	{!! Form::label('descripcion', 'Descripción:',['class' => 'col-sm-2 control-label']) !!}
		      	<div class="col-sm-10">
		      		{!! Form::select('descripcion',[
			      		'Estudiante' => 'Estudiante',
			      		'Egresado' => 'Egresado',
			      		'Dosente' => 'Dosente',
			      		'Bibliotecario' => 'Bibliotecario'
			      		],'user',['class' => 'form-control']) !!}
		      	</div>
		      </div>

		      <div class="for-grup">
		      	{!! Form::label('telefono', 'Telefono:',[	'class' => 'col-sm-2 control-label']) !!}
		      	<div class="col-sm-10">
		      		{!! Form::text('telefono','' ,[	'class' => 'form-control']) !!}
		      	</div>
		      </div>

		      <div class="for-grup">
		      	{!! Form::label('direccion', 'Dirección:',[	'class' => 'col-sm-2 control-label']) !!}
		      	<div class="col-sm-10">
		      		{!! Form::text('direccion','' ,['class' => 'form-control']) !!}
		      	</div>
		      </div>

	      </div>
	      <br>
	      <div class="modal-footer">

	      	{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
	      	{!! Form::submit('Cancelar',['class' => 'btn btn-defaul', 'data-dismiss'=> "modal"]) !!}

	      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>


@endsection
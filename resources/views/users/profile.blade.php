@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Mi Perfil de Usuario</div>

				<div class="panel-body">
					

				     	 @if(Session::has('message'))
							<p class="alert alert-info" > {{Session::get('message')}} </p>
						@endif

						<div class="row">
							<div class="col-md-offset-2">
							      <div class="for-grup col-sm-10">
							      	{!! Form::label('name', 'Nombre:',[	'class' => 'col-sm-2 control-label']) !!}
							      	<div class="col-sm-10">
							      		{!! Form::label('name',  $profile->name ,[	'class' => 'col-sm-12 ']) !!}
							      	</div>
							      </div>

							      <div class="for-grup col-sm-10">
							      	{!! Form::label('email', 'Correo:',[	'class' => 'col-sm-2 control-label']) !!}
							      	<div class="col-sm-10">
							      		{!! Form::label('email', $profile->email ,[	'class' => 'col-sm-12 ']) !!}
							      	</div>
							      </div>

							      <div class="for-grup col-sm-10">
							      	{!! Form::label('type', 'Tipo:',['class' => 'col-sm-2 control-label']) !!}
							      	<div class="col-sm-10">
							      		{!! Form::label('type',  $profile->type ,[	'class' => 'col-sm-12 ']) !!}
							      	</div>
							      </div>

							      <div class="for-grup col-sm-10">
							      	{!! Form::label('descripcion', 'Descripción:',['class' => 'col-sm-2 control-label']) !!}
							      	<div class="col-sm-10">
							      			{!! Form::label('descripcion',  $profile->descripcion,[	'class' => 'col-sm-12 ']) !!}
							      	</div>
							      </div>

							      <div class="for-grup col-sm-10">
							      	{!! Form::label('telefono', 'Telefono:',[	'class' => 'col-sm-2 control-label']) !!}
							      	<div class="col-sm-10">
							      		{!! Form::label('telefono',  $profile->telefono,[	'class' => 'col-sm-12 ']) !!}
							      	</div>
							      </div>

							      <div class="for-grup col-sm-10">
							      	{!! Form::label('direccion', 'Dirección:',[	'class' => 'col-sm-2 control-label']) !!}
							      	<div class="col-sm-10">
							      		{!! Form::label('direccion',  $profile->direccion ,[	'class' => 'col-sm-12 ']) !!}
							      	</div>
							      </div>
							      <br/>

											<button class=" col-sm-4 btn btn-primary btn-lg "  title="Editar" role="button" data-toggle="modal" data-target="#editProfile{{$profile->id}}"> 
											<i class="fa fa-pencil" > </i>
											Editar Perfil
											</button>

											<button class=" col-sm-4 btn btn-danger btn-lg "  title="Eliminar" role="button" data-toggle="modal" data-target="#deletetProfile{{$profile->id}}"> 
											<i class="fa fa-times" > </i>
											Eliminar Cuenta
											</button>				

								
							</div>
						</div>

				      
				      <br>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- Modal Editar Perfil-->


<div class="modal fade" id="editProfile{{$profile->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editando al usuario No. {{$profile->id}}</h4>
      </div>
      {!! Form::open(['url' => 'admin/users/'.$profile->id, 'method' => 'PUT', 'class' => 'form-horizontal' ]) !!}
	      <div class="modal-body">
		      <br>

		      <div class="for-grup">
		      	{!! Form::label('name', 'Nombre:',[	'class' => 'col-sm-2 control-label']) !!}
		      	<div class="col-sm-10">
		      		{!! Form::text('name',  $profile->name  ,[	'class' => 'form-control']) !!}
		      	</div>
		      </div>

		      <div class="for-grup">
		      	{!! Form::label('email', 'Correo:',[	'class' => 'col-sm-2 control-label']) !!}
		      	<div class="col-sm-10">
		      		{!! Form::text('email',$profile->email ,[	'class' => 'form-control']) !!}
		      	</div>
		      </div>

		      <div class="for-grup">
		      	{!! Form::label('password', 'Contraseña:',['class' => 'col-sm-2 control-label']) !!}
		      	<div class="col-sm-10">
		      		{!! Form::password('password',['class' => 'form-control']) !!}
		      	</div>
		      </div>

		      <div class="for-grup">
		      	{!! Form::label('type', 'Tipo:',['class' => 'col-sm-2 control-label ']) !!}
		      	<div class="col-sm-10">
		      		{!! Form::text('email',$profile->type ,[	'class' => 'form-control','disabled' ]) !!}

		      	</div>
		      </div>

		      <div class="for-grup">
		      	{!! Form::label('descripcion', 'Descripción:',['class' => 'col-sm-2 control-label']) !!}
		      	<div class="col-sm-10">
		      		{!! Form::select('descripcion',config('options.descripcion'),$profile->descripcion,['class' => 'form-control']) !!}
		      	</div>
		      </div>

		      <div class="for-grup">
		      	{!! Form::label('telefono', 'Telefono:',[	'class' => 'col-sm-2 control-label']) !!}
		      	<div class="col-sm-10">
		      		{!! Form::text('telefono',$profile->telefono ,[	'class' => 'form-control']) !!}
		      	</div>
		      </div>

		      <div class="for-grup">
		      	{!! Form::label('direccion', 'Dirección:',[	'class' => 'col-sm-2 control-label']) !!}
		      	<div class="col-sm-10">
		      		{!! Form::text('direccion',$profile->direccion ,['class' => 'form-control']) !!}
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


<!-- Modal Eliminar Cuenta-->
<div class="modal fade" id="deletetProfile{{$profile->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">¿Esta seguro que desea eliminar al usuario No. {{$profile->id}}?</h4>
      </div>
      {!! Form::open(['url' => 'user/profile/'.$profile->id, 'method' => 'DELETE', 'class' => 'form-horizontal' ]) !!}
	      <div class="modal-body">
		      <br>

		      <div class="for-grup">
		      	{!! Form::label('name', 'Nombre:',[	'class' => 'col-sm-2 control-label']) !!}
		      	<div class="col-sm-10">
		      		{!! Form::label('name', $profile->name,[	'class' => 'col-sm-2 form-control']) !!}
		      	</div>
		      </div>

		      <div class="for-grup">
		      	{!! Form::label('email', 'Correo:',[	'class' => 'col-sm-2 control-label']) !!}
		      	<div class="col-sm-10">
		      		{!! Form::label('email', $profile->email,[	'class' => 'col-sm-2 form-control']) !!}
		      	</div>
		      </div>

		      <div class="for-grup">
		      	{!! Form::label('type', 'Tipo:',['class' => 'col-sm-2 control-label']) !!}
		      	<div class="col-sm-10">
		      		{!! Form::label('type', $profile->type,[	'class' => 'col-sm-2 form-control']) !!}
		      	</div>
		      </div>

		      <div class="for-grup">
		      	{!! Form::label('descripcion', 'Descripción:',['class' => 'col-sm-2 control-label']) !!}
		      	<div class="col-sm-10">
		      		{!! Form::label('descripcion', $profile->descripcion,[	'class' => 'col-sm-2 form-control']) !!}
		      	</div>
		      </div>

		      <div class="for-grup">
		      	{!! Form::label('telefono', 'Telefono:',[	'class' => 'col-sm-2 control-label']) !!}
		      	<div class="col-sm-10">
		      		{!! Form::label('telefono', $profile->telefono,[	'class' => 'col-sm-2 form-control']) !!}
		      	</div>
		      </div>

		      <div class="for-grup">
		      	{!! Form::label('direccion', 'Dirección:',[	'class' => 'col-sm-2 control-label']) !!}
		      	<div class="col-sm-10">
		      		{!! Form::label('direccion', $profile->direccion,[	'class' => 'col-sm-2 form-control']) !!}
		      	</div>
		      </div>

	      </div>
	      <br>
	      <div class="modal-footer">

	      	{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
	      	{!! Form::submit('Cancelar',['class' => 'btn btn-defaul', 'data-dismiss'=> "modal"]) !!}

	      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>

@endsection

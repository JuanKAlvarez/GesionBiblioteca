@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Catalogo</div>
				@if(Session::has('message'))
					<p class="alert alert-info" > {{Session::get('message')}} </p>
				@endif

				<div class="panel-body">
				<div class="row">
						{!!  Form::model(Request::all()	,
								[ 
								'route'		=>	'catalogo.index',
								'method'	=>	'GET', 
								'class'		=>	'sombra navbar-form navbar-left pull-right', 
								'role'		=>	'search'

								]
							) 	
						!!}
						<div class="form-group">
						{!! Form::text('titulo',	null,[ 'class'	=>	' form-control input-sm', 'placeholder'	=>	'Titulo del Libro' ]) !!}		
						</div>
						<button type="submit" class="btn btn-info btn-sm">Buscar</button>

					{!!  Form::close() !!}
					{!! $libros->setPath('')->appends(Request::only(['titulo']))->render() !!}	
					
			
				</div>	
				<div class="  table-responsive">
						<table class="table">
							<tr>
								<th class="">ISBN</th>
								<th class="">TITULO</th>
								<th class="">EDISION</th>
								<th class="">PAGINAS</th>
								<th class="">AÑO</th>
								<th class="">UBICACIÓN</th>
								<th class="">EDITORIAL</th>
								<th class="">AUTOR</th>
								<th class="">TEMA</th>
								<th class="">IDIOMA</th>
								<th class=""></th>
							</tr>
							@foreach($libros as $libro)
							<tr>
								<td class=""> {{$libro->isbn}} </td>
								<td class=""> {{$libro->titulo}} </td>
								<td class=""> {{$libro->edision}} </td>
								<td class=""> {{$libro->paginas}} </td>
								<td class=""> {{$libro->año}} </td>
								<td class=""> {{$libro->ubicacion_id}} </td>
								<td class=""> {{$libro->editorial_id}} </td>
								<td class=""> {{$libro->autor_id}} </td>
								<td class=""> {{$libro->tema_id}} </td>
								<td class=""> {{$libro->idioma_id}} </td>
								<td class="">
									<i 
										class="fa fa-pencil btn btn-primary btn-xs btn-block" 
										data-target="#editUser{{$libro->id}}"
										data-toggle="modal" 
										style=" margin: 0"  
										title="Editar" 
										role="button" 
									></i>				
									<i 
										class="fa fa-times btn btn-danger btn-xs btn-block" 
										data-target="#deletetUser{{$libro->id}}"
										data-toggle="modal" 
										style=" margin: 0" 
										title="Borrar"
										role="button" 
									></i>
								</td>
							</tr>

							@endforeach
						</table>
					</div>
				{!! $libros->setPath('')->appends(Request::only(['titulo']))->render() !!}	
					

				</div>
			</div>
		</div>
	</div>
</div>

@endsection
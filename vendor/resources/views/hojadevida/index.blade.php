@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div align="right">
				<a href="{{ route('hojadevida.create') }}" class="btn btn-primary">Agregar</a>
				<a href="{{ route('home') }}" class="btn btn-success ti-home"></a>
			</div>	
		</div>
		
		<div class="col-md-12">
			<h2 class="text-success">Hojas de vida</h2>
		</div>
		@if (sizeof($hojadevidas) > 0)
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombres</th>
					<th>Identificacion</th>
					<th>Correo</th>
                    <th>Direccion</th>
					<th>Telefono</th>
					<th>celular</th>
					<th>fecharegistro</th>
					<th>barrio</th>
					<th>ciudad</th>
					<th>tipoidentificacion</th>
					<th>estudios</th>
					
					<th class="text-center" width="20%">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($hojadevidas as $hojadevida)
				<tr>
					<td>{{ $hojadevida->idhojadevida }}</td>
					<td>{{ $hojadevida->nombre_apellido }}</td>
					<td>{{ $hojadevida->identificacion }}</td>
					<td>{{ $hojadevida->correo }}</td>
					<td>{{ $hojadevida->direccion }}</td>
					<td>{{ $hojadevida->telefono }}</td>
					<td>{{ $hojadevida->celular }}</td>
					<td>{{ $hojadevida->fecharegistro }}</td>
					<td>{{ $hojadevida->barrio }}</td>
					<td>{{ $hojadevida->ciudad }}</td>
					<td>{{ $hojadevida->tipoidentificacion }}</td>
					<td>{{ $hojadevida->estudios }}</td>
				
					<td class="text-center">
						<a href="{{ route('hojadevida.edit', $hojadevida) }}" class="btn btn-success ti-pencil-alt"></a>
						<form action="{{ route('hojadevida.destroy', $hojadevida) }}" method="POST" class="d-inline-block">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger ti-trash"
							onclick="return confirm('¿Está seguro de eliminar la hoja de vida?!!')"></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="d-flex justify-content-center">
			
		</div>
		@else
		<div class="alert alert-secondary"><h3>No se encontraron Hojas de vida</h3></div>
		@endif
	</div>
</div>

@endsection    

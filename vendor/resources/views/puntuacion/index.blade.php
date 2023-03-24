@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div align="right">
				<a href="{{ route('puntuacion.create') }}" class="btn btn-primary">Agregar</a>
				<a href="{{ route('home') }}" class="btn btn-success ti-home"></a>
			</div>	
		</div>
		
		<div class="col-md-12">
			<h2 class="text-success">Puntuacion de la entrevista</h2>
		</div>
		@if (sizeof($puntuaciones) > 0)
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Puntuacion</th>
					<th>Fecha</th>
					<th>Observaciones</th>
					<th>Id entrevista</th>
					<th class="text-center" width="20%">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($puntuaciones as $puntuacion)
				<tr>
					<td>{{ $puntuacion->idpuntuacion }}</td>
					<td>{{ $puntuacion->puntuacioncalificacion }}</td>
					<td>{{ $puntuacion->fechapuntuacion }}</td>
					<td>{{ $puntuacion->observaciones }}</td>
					<td>{{ $puntuacion->identrevista }}</td>
					<td class="text-center">
						<a href="{{ route('puntuacion.edit', $puntuacion) }}" class="btn btn-success ti-pencil-alt"></a>
						<form action="{{ route('puntuacion.destroy', $puntuacion) }}" method="POST" class="d-inline-block">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger ti-trash"
							onclick="return confirm('¿Está seguro de eliminar la puntuacion?!!')"></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="d-flex justify-content-center">
			
		</div>
		@else
		<div class="alert alert-secondary"><h3>No se encontraron Puntuaciones</h3></div>
		@endif
	</div>
</div>

@endsection    

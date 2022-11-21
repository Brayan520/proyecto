@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div align="right">
				<a href="{{ route('calificacion.create') }}" class="btn btn-primary">Agregar</a>
				<a href="{{ route('home') }}" class="btn btn-success ti-home"></a>
			</div>	
		</div>
		
		<div class="col-md-12">Calificaciones</h2>
		</div>
		@if (sizeof($calificaciones) > 0)
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Puntuación</th>
					<th>Fecha Calificación</th>
					<th>Observaciones</th>
					<th>Dirección</th>
					<th class="text-center" width="20%">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($calificaciones as $calificacion)
				<tr>
					<td>{{ $calificacion->idcalificacion }}</td>
					<td>{{ $calificacion->puntuacioncalificacion }}</td>
					<td>{{ $calificacion->fechacalificacion }}</td>
					<td>{{ $calificacion->observaciones }}</td>
					<td>{{ $calificacion->contratoservicios->direccion }}</td>
					<td class="text-center">
						<a href="{{ route('calificacion.edit', $calificacion) }}" class="btn btn-success ti-pencil-alt"></a>
						<form action="{{ route('calificacion.destroy', $calificacion) }}" method="POST" class="d-inline-block">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger ti-trash"
							onclick="return confirm('¿Está seguro de eliminar al calificación?!!')"></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="d-flex justify-content-center">
			
		</div>
		@else
		<div class="alert alert-secondary"><h3>No se encontraron Calificaciones</h3></div>
		@endif
	</div>
</div>

@endsection    

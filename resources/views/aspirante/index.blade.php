@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div align="right">
				<a href="{{ route('aspirante.create') }}" class="btn btn-primary">Agregar</a>
				<a href="{{ route('home') }}" class="btn btn-success ti-home"></a>
			</div>	
		</div>
		
		<div class="col-md-12">
			<h2 class="text-success">Aspirantes</h2>
		</div>
		@if (sizeof($aspirantes) > 0)
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre aspirante</th>
					<th>Fecha de Postulación</th>
					<th class="text-center" width="20%">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($aspirantes as $aspirante)
				<tr>
				<td>{{ $aspirante->idaspirante }}</td>
					<td>{{ $aspirante->hojadevidas->nombre_apellido }}</td>
					<td>{{ $aspirante->postulaciones->fechapostulacion }}</td>
					<td class="text-center">
						<a href="{{ route('aspirante.edit', $aspirante) }}" class="btn btn-success ti-pencil-alt"></a>
						<form action="{{ route('aspirante.destroy', $aspirante) }}" method="POST" class="d-inline-block">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger ti-trash"
							onclick="return confirm('¿Está seguro de eliminar el aspirante?!!')"></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="d-flex justify-content-center">
			
		</div>
		@else
		<div class="alert alert-secondary"><h3>No se encontraron Aspirantes</h3></div>
		@endif
	</div>
</div>

@endsection    

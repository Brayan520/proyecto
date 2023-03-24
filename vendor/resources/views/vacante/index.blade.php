@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div align="right">
				<a href="{{ route('vacante.create') }}" class="btn btn-primary">Agregar</a>
				<a href="{{ route('home') }}" class="btn btn-success ti-home"></a>
			</div>	
		</div>
		
		<div class="col-md-12">
			<h2 class="text-success">Vacantes</h2>
		</div>
		@if (sizeof($vacantes) > 0)
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Experiencia</th>
					<th>Horario</th>
					<th>Disponibilidad</th>
                    <th>Perfil</th>
					<th>Salario</th>
					<th class="text-center" width="20%">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($vacantes as $vacante)
				<tr>
					<td>{{ $vacante->idvacante }}</td>
					<td>{{ $vacante->experiencia }}</td>
					<td>{{ $vacante->horario }}</td>
					<td>{{ $vacante->disponibilidad }}</td>
					<td>{{ $vacante->perfils->nombre }}</td>
					<td>{{ $vacante->cargos->salario }}</td>
					<td class="text-center">
						<a href="{{ route('vacante.edit', $vacante) }}" class="btn btn-success ti-pencil-alt"></a>
						<form action="{{ route('vacante.destroy', $vacante) }}" method="POST" class="d-inline-block">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger ti-trash"
							onclick="return confirm('¿Está seguro de eliminar la vacante?!!')"></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="d-flex justify-content-center">
			
		</div>
		@else
		<div class="alert alert-secondary"><h3>No se encontraron Vacantes</h3></div>
		@endif
	</div>
</div>

@endsection    

@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div align="right">
				<a href="{{ route('solicitudservicio.create') }}" class="btn btn-primary">Agregar</a>
				<a href="{{ route('home') }}" class="btn btn-success ti-home"></a>
			</div>	
		</div>
		
		<div class="col-md-12">
			<h2 class="text-success">Solicitudes de servicios</h2>
		</div>
		@if (sizeof($solicitudservicios) > 0)
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Fecha Solicitud</th>
					<th>Nombre del Cliente</th>
					<th class="text-center" width="20%">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($solicitudservicios as $solicitudservicio)
				<tr>
					<td>{{ $solicitudservicio->idsolicitudservicio }}</td>
					<td>{{ $solicitudservicio->fechasolicitud }}</td>
					<td>{{ $solicitudservicio->user->nombre_apellido }}</td>
					<td class="text-center">
						<a href="{{ route('solicitudservicio.edit', $solicitudservicio) }}" class="btn btn-success ti-pencil-alt"></a>
						<form action="{{ route('solicitudservicio.destroy', $solicitudservicio) }}" method="POST" class="d-inline-block">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger ti-trash"
							onclick="return confirm('¿Está seguro de eliminar la solicitud?!!')"></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="d-flex justify-content-center">
			
		</div>
		@else
		<div class="alert alert-secondary"><h3>No se encontraron Solicitudes</h3></div>
		@endif
	</div>
</div>

@endsection    

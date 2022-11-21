@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div align="right">
				<a href="{{ route('detalleservicio.create') }}" class="btn btn-primary">Agregar</a>
				<a href="{{ route('home') }}" class="btn btn-success ti-home"></a>
			</div>	
		</div>
		
		<div class="col-md-12">
			<h2 class="text-success">Detalles Servicios</h2>
		</div>
		@if (sizeof($detalleservicios) > 0)
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Cantidad personal</th>
					<th>Total</th>
					<th>Fecha de la Solicitud</th>
					<th>Tipo del Servicio</th>
					<th class="text-center" width="20%">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($detalleservicios as $detalleservicio)
				<tr>
					<td>{{ $detalleservicio->iddetalleservicio }}</td>
					<td>{{ $detalleservicio->cantidadpersonal }}</td>
					<td>{{ $detalleservicio->total }}</td>
					<td>{{ $detalleservicio->solicitudservicios->fechasolicitud }}</td>
					<td>{{ $detalleservicio->servicios->tiposervicio }}</td>
					<td class="text-center">
						<a href="{{ route('detalleservicio.edit', $detalleservicio) }}" class="btn btn-success ti-pencil-alt"></a>
						<form action="{{ route('detalleservicio.destroy', $detalleservicio) }}" method="POST" class="d-inline-block">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger ti-trash"
							onclick="return confirm('¿Está seguro de eliminar el detalle del servicio?!!')"></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="d-flex justify-content-center">
			
		</div>
		@else
		<div class="alert alert-secondary"><h3>No se encontraron Detalles de servicios</h3></div>
		@endif
	</div>
</div>

@endsection    

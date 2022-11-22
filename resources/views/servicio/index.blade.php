@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div align="right">
				<a href="{{ route('servicio.create') }}" class="btn btn-primary">Agregar</a>
				<a href="{{ route('home') }}" class="btn btn-success ti-home"></a>
			</div>	
		</div>
		
		<div class="col-md-12">
			<h2 class="text-success">Servicios</h2>
		</div>
		@if (sizeof($servicios) > 0)
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Tipo de servicio</th>
					<th>Precio</th>
					<th class="text-center" width="20%">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($servicios as $servicio)
				<tr>
					<td>{{ $servicio->idservicio }}</td>
					<td>{{ $servicio->tiposervicio }}</td>
					<td>{{ $servicio->precio }}</td>
					<td class="text-center">
						<a href="{{ route('servicio.edit', $servicio) }}" class="btn btn-success ti-pencil-alt"></a>
						<form action="{{ route('servicio.destroy', $servicio) }}" method="POST" class="d-inline-block">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger ti-trash"
							onclick="return confirm('¿Está seguro de eliminar el servicio?!!')"></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="d-flex justify-content-center">
			
		</div>
		@else
		<div class="alert alert-secondary"><h3>No se encontraron servicios</h3></div>
		@endif
	</div>
</div>

@endsection    

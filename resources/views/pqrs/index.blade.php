@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div align="right">
				<a href="{{ route('pqrs.create') }}" class="btn btn-primary">Agregar</a>
				<a href="{{ route('home') }}" class="btn btn-success ti-home"></a>
			</div>	
		</div>
		
		<div class="col-md-12">
			<h2 class="text-success">Pqrs</h2>
		</div>
		@if (sizeof($pqrss) > 0)
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Descripcion</th>
					<th>Fecha</th>
					<th>Tipo</th>
                    <th>Estado</th>
					<th>Direccion</th>
					<th>Respuesta</th>
					<th class="text-center" width="20%">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pqrss as $pqrs)
				<tr>
				<td>{{ $pqrs->idpqrs }}</td>
					<td>{{ $pqrs->descripcion }}</td>
					<td>{{ $pqrs->fecha }}</td>
					<td>{{ $pqrs->tipopqrss->tipo }}</td>
					<td>{{ $pqrs->estados->tipo }}</td>
					<td>{{ $pqrs->contratoservicios->direccion }}</td>
					<td>{{ $pqrs->respuestas->respuesta }}</td>
					<td class="text-center">
						<a href="{{ route('pqrs.edit', $pqrs) }}" class="btn btn-success ti-pencil-alt"></a>
						<form action="{{ route('pqrs.destroy', $pqrs) }}" method="POST" class="d-inline-block">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger ti-trash"
							onclick="return confirm('¿Está seguro de eliminar la pqrs?!!')"></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="d-flex justify-content-center">
			
		</div>
		@else
		<div class="alert alert-secondary"><h3>No se encontraron Pqrs</h3></div>
		@endif
	</div>
</div>

@endsection    

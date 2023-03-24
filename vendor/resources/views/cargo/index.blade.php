@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div align="right">
				<a href="{{ route('cargo.create') }}" class="btn btn-primary">Agregar</a>
				<a href="{{ route('home') }}" class="btn btn-success ti-home"></a>
			</div>	
		</div>
		
		<div class="col-md-12">
			<h2 class="text-success">Cargos</h2>
		</div>
		@if (sizeof($cargos) > 0)
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre del cargo</th>
					<th>Salario</th>
					<th class="text-center" width="20%">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cargos as $cargo)
				<tr>
					<td>{{ $cargo->idcargo }}</td>
					<td>{{ $cargo->nombre }}</td>
					<td>{{ $cargo->salario }}</td>
					<td class="text-center">
						<a href="{{ route('cargo.edit', $cargo) }}" class="btn btn-success ti-pencil-alt"></a>
						<form action="{{ route('cargo.destroy', $cargo) }}" method="POST" class="d-inline-block">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger ti-trash"
							onclick="return confirm('¿Está seguro de eliminar el cargo?!!')"></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="d-flex justify-content-center">
			
		</div>
		@else
		<div class="alert alert-secondary"><h3>No se encontraron Cargos</h3></div>
		@endif
	</div>
</div>

@endsection    

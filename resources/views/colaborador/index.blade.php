@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div align="right">
				<a href="{{ route('colaborador.create') }}" class="btn btn-primary">Agregar</a>
				<a href="{{ route('home') }}" class="btn btn-success ti-home"></a>
			</div>	
		</div>
		
		<div class="col-md-12">
			<h2 class="text-success">Colaboradores</h2>
		</div>
		@if (sizeof($colaboradores) > 0)
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Dirección</th>
					<th class="text-center" width="20%">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($colaboradores as $colaborador)
				<tr>
					<td>{{ $colaborador->idcolaborador }}</td>
					<td>{{ $colaborador->contratoservicios->direccion }}</td>
					<td class="text-center">
						<a href="{{ route('colaborador.edit', $colaborador) }}" class="btn btn-success ti-pencil-alt"></a>
						<form action="{{ route('colaborador.destroy', $colaborador) }}" method="POST" class="d-inline-block">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger ti-trash"
							onclick="return confirm('¿Está seguro de eliminar el colaborador?!!')"></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="d-flex justify-content-center">
			
		</div>
		@else
		<div class="alert alert-secondary"><h3>No se encontraron Colaboradores</h3></div>
		@endif
	</div>
</div>

@endsection    

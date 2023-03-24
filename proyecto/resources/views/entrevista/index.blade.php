@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div align="right">
				<a href="{{ route('entrevista.create') }}" class="btn btn-primary">Agregar</a>
				<a href="{{ route('home') }}" class="btn btn-success ti-home"></a>
			</div>	
		</div>
		
		<div class="col-md-12">
			<h2 class="text-success">Entrevistas</h2>
		</div>
		@if (sizeof($entrevistas) > 0)
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Entrevistador</th>
					<th>Tipo de entrevista</th>
					<th>Lugar</th>
                    <th>Fecha</th>
					<th>Hora</th>
					<th>Aspirante</th>
					<th class="text-center" width="20%">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($entrevistas as $entrevistum)
				<tr>
					<td>{{ $entrevistum->identrevista }}</td>
					<td>{{ $entrevistum->nombreentrevistador }}</td>
					<td>{{ $entrevistum->tipoentrevista }}</td>
					<td>{{ $entrevistum->lugar }}</td>
					<td>{{ $entrevistum->fecha }}</td>
					<td>{{ $entrevistum->hora }}</td>
					<td>{{ $entrevistum->aspirantes->hojadevidas->nombre_apellido }}</td>
					<td class="text-center">
						<a href="{{ route('entrevista.edit', $entrevistum) }}" class="btn btn-success ti-pencil-alt"></a>
						<form action="{{ route('entrevista.destroy', $entrevistum) }}" method="POST" class="d-inline-block">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger ti-trash"
							onclick="return confirm('¿Está seguro de eliminar la entrevista?!!')"></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="d-flex justify-content-center">
			
		</div>
		@else
		<div class="alert alert-secondary"><h3>No se encontraron Entrevistas</h3></div>
		@endif
	</div>
</div>

@endsection    

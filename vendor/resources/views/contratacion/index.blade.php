@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div align="right">
				<a href="{{ route('contratacion.create') }}" class="btn btn-primary">Agregar</a>
				<a href="{{ route('home') }}" class="btn btn-success ti-home"></a>
			</div>	
		</div>
		
		<div class="col-md-12">
			<h2 class="text-success">Contrataciones</h2>
		</div>
		@if (sizeof($contrataciones) > 0)
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Termino Laboral</th>
					<th>Fecha Inicial</th>
					<th>Fecha Final</th>
                    <th>Sueldo</th>
					<th>ID Colaborador</th>
					<th>ID Aspirante</th>
					<th class="text-center" width="20%">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($contrataciones as $contratacion)
				<tr>
					<td>{{ $contratacion->idcontratacion }}</td>
					<td>{{ $contratacion->terminolaboral }}</td>
					<td>{{ $contratacion->fechainicial }}</td>
					<td>{{ $contratacion->fechafinal }}</td>
					<td>{{ $contratacion->sueldo }}</td>
					<td>{{ $contratacion->colaboradores->idcolaborador }}</td>
					<td>{{ $contratacion->aspirantes->idaspirante }}</td>
					<td class="text-center">
						<a href="{{ route('contratacion.edit', $contratacion) }}" class="btn btn-success ti-pencil-alt"></a>
						<form action="{{ route('contratacion.destroy', $contratacion) }}" method="POST" class="d-inline-block">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger ti-trash"
							onclick="return confirm('¿Está seguro de eliminar la contratacion?!!')"></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="d-flex justify-content-center">
			
		</div>
		@else
		<div class="alert alert-secondary"><h3>No se encontraron Contrataciones</h3></div>
		@endif
	</div>
</div>

@endsection    

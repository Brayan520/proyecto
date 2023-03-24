@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div align="right">
				<a href="{{ route('contratoservicio.create') }}" class="btn btn-primary">Agregar</a>
				<a href="{{ route('home') }}" class="btn btn-success ti-home"></a>
			</div>	
		</div>
		
		<div class="col-md-12">
			<h2 class="text-success">Contratos de servicios</h2>
		</div>
		@if (sizeof($contratoservicios) > 0)
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Direccion</th>
					<th>Fecha Inicial</th>
					<th>Fecha Final</th>
					<th>Fecha Solicitud</th>
					<th class="text-center" width="20%">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($contratoservicios as $contratoservicio)
				<tr>
					<td>{{ $contratoservicio->idcontratoservicio }}</td>
					<td>{{ $contratoservicio->direccion }}</td>
					<td>{{ $contratoservicio->fechainicial }}</td>
					<td>{{ $contratoservicio->fechafinal }}</td>
					<td>{{ $contratoservicio->solicitudservicios->fechasolicitud }}</td>
					<td class="text-center">
						<a href="{{ route('contratoservicio.edit', $contratoservicio) }}" class="btn btn-success ti-pencil-alt"></a>
						<form action="{{ route('contratoservicio.destroy', $contratoservicio) }}" method="POST" class="d-inline-block">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger ti-trash"
							onclick="return confirm('¿Está seguro de eliminar el contrato de servicio?!!')"></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="d-flex justify-content-center">
			
		</div>
		@else
		<div class="alert alert-secondary"><h3>No se encontraron Contratos de servicios</h3></div>
		@endif
	</div>
</div>

@endsection    

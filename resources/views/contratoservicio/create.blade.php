@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<a href="{{ route('contratoservicio.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
		<form action="{{ route('contratoservicio.store') }}" method="POST">
			@csrf
			<div class="col-md-6">
				<label for="direccion" class="form-label">Dirección</label>
				<input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion') }}">
				@error('direccion')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="fechainicial" class="form-label">Fecha Inicial</label>
				<input type="date" class="form-control" id="fechainicial" name="fechainicial" value="{{ old('fechainicial') }}">
				@error('fechainicial')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="fechafinal" class="form-label">Fecha Final</label>
				<input type="date" class="form-control" id="fechafinal" name="fechafinal" value="{{ old('fechafinal') }}">
				@error('fechafinal')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="idsolicitudservicio" class="form-label">Fecha Solicitud</label>
				<select class="form-control" id='idsolicitudservicio' name='idsolicitudservicio' value="{{ old('idsolicitudservicio') }}">
					<option value="">Seleccionar ...</option>
					@foreach($solicitudservicios as $solicitudservicio)
					<option value="{{ $solicitudservicio->idsolicitudservicio }}">{{ $solicitudservicio->fechasolicitud }}</option>
					@endforeach
				</select>
				@error('idsolicitudservicio')
				<small class="text-danger">Seleccione una fecha de solicitud</small>
				@enderror
			</div>
			<div class="col-md-6 mt-3">
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
		</form>
	</div>
</div>

@endsection
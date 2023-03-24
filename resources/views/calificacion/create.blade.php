@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<a href="{{ route('calificacion.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
		<form action="{{ route('calificacion.store') }}" method="POST">
			@csrf
			<div class="col-md-6">
				<label for="puntuacioncalificacion" class="form-label">Puntuacion calificación</label>
				<input type="text" class="form-control" id="puntuacioncalificacion" name="puntuacioncalificacion" value="{{ old('puntuacioncalificacion') }}">
				@error('puntuacioncalificacion')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="fechacalificacion" class="form-label">Fecha calificación</label>
				<input type="date" class="form-control" id="fechacalificacion" name="fechacalificacion" value="{{ old('fechacalificacion') }}">
				@error('fechacalificacion')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="observaciones" class="form-label">Observaciones</label>
				<input type="text" class="form-control" id="observaciones" name="observaciones" value="{{ old('observaciones') }}">
				@error('observaciones')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="idcontratoservicio" class="form-label">Dirección</label>
				<select class="form-control" id='idcontratoservicio' name='idcontratoservicio' value="{{ old('idcontratoservicio') }}">
					<option value="">Seleccionar ...</option>
					@foreach($contratoservicios as $contratoservicio)
					<option value="{{ $contratoservicio->idcontratoservicio }}">{{ $contratoservicio->direccion }}</option>
					@endforeach
				</select>
				@error('idcontratoservicio')
				<small class="text-danger">Seleccione una dirección</small>
				@enderror
			</div>
			<div class="col-md-6 mt-3">
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
		</form>
	</div>
</div>

@endsection
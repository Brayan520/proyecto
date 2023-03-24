@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<a href="{{ route('postulacion.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
		<form action="{{ route('postulacion.store') }}" method="POST">
			@csrf
			<div class="col-md-6">
				<label for="fechapostulacion" class="form-label">Fecha de la Postulación</label>
				<input type="date" class="form-control" id="fechapostulacion" name="fechapostulacion" value="{{ old('fechapostulacion') }}">
				@error('fechapostulacion')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="idvacante" class="form-label">Horario</label>
				<select class="form-control" id='idvacante' name='idvacante' value="{{ old('idvacante') }}">
					<option value="">Seleccionar ...</option>
					@foreach($vacantes as $vacante)
					<option value="{{ $vacante->idvacante }}">{{ $vacante->horario }}</option>
					@endforeach
				</select>
				@error('idvacante')
				<small class="text-danger">Seleccione un horario</small>
				@enderror
			</div>
			<div class="col-md-6 mt-3">
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
		</form>
	</div>
</div>

@endsection
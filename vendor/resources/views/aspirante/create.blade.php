@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<a href="{{ route('aspirante.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
		<form action="{{ route('aspirante.store') }}" method="POST">
			@csrf
			<div class="col-md-6">
				<label for="idhojadevida" class="form-label">Nombre aspirante</label>
				<select class="form-control" id='idhojadevida' name='idhojadevida' value="{{ old('idhojadevida') }}">
					<option value="">Seleccionar ...</option>
					@foreach($hojadevidas as $hojadevida)
					<option value="{{ $hojadevida->idhojadevida }}">{{ $hojadevida->nombre_apellido }}</option>
					@endforeach
				</select>
				@error('idhojadevida')
				<small class="text-danger">Seleccione un Aspirante</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="idpostulacion" class="form-label">Fecha de postulación</label>
				<select class="form-control" id='idpostulacion' name='idpostulacion' value="{{ old('idpostulacion') }}">
					<option value="">Seleccionar ...</option>
					@foreach($postulaciones as $postulacion)
					<option value="{{ $postulacion->idpostulacion }}">{{ $postulacion->fechapostulacion }}</option>
					@endforeach
				</select>
				@error('fechapostulacion')
				<small class="text-danger">Seleccione una Fecha de postulación</small>
				@enderror
			</div>
			<div class="col-md-6 mt-3">
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
		</form>
	</div>
</div>

@endsection
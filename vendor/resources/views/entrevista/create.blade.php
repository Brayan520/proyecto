@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<a href="{{ route('entrevista.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
		<form action="{{ route('entrevista.store') }}" method="POST">
			@csrf
			<div class="col-md-6">
				<label for="nombreentrevistador" class="form-label">Nombre del entrevistador</label>
				<input type="text" class="form-control" id="nombreentrevistador" name="nombreentrevistador" value="{{ old('nombreentrevistador') }}">
				@error('nombreentrevistador')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="tipoentrevista" class="form-label">Tipo de entrevista</label>
				<input type="text" class="form-control" id="tipoentrevista" name="tipoentrevista" value="{{ old('tipoentrevista') }}">
				@error('tipoentrevista')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="lugar" class="form-label">Lugar de la entrevista</label>
				<input type="text" class="form-control" id="lugar" name="lugar" value="{{ old('lugar') }}">
				@error('lugar')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="fecha" class="form-label">Fecha de la entrevista</label>
				<input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha') }}">
				@error('fecha')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="hora" class="form-label">Hora de la entrevista</label>
				<input type="time" class="form-control" id="hora" name="hora" value="{{ old('hora') }}">
				@error('lugar')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="idaspirante" class="form-label">Nombre del aspirante</label>
				<select class="form-control" id='idaspirante' name='idaspirante' value="{{ old('idaspirante') }}">
					<option value="">Seleccionar ...</option>
					@foreach($aspirantes as $aspirante)
					<option value="{{ $aspirante->idaspirante }}">{{ $aspirante->hojadevidas->nombre_apellido }}</option>
					@endforeach
				</select>
				@error('idaspirante')
				<small class="text-danger">Seleccione un Aspirante a entrevistar</small>
				@enderror
			</div>
			<div class="col-md-6 mt-3">
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
		</form>
	</div>
</div>

@endsection
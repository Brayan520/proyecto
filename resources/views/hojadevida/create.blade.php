@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<a href="{{ route('hojadevida.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
		<form action="{{ route('hojadevida.store') }}" method="POST">
			@csrf
			<div class="col-md-6">
				<label for="nombre" class="form-label">Nombre</label>
				<input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
				@error('nombre')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="apellido" class="form-label">Apellido</label>
				<input type="text" class="form-control" id="apellido" name="apellido" value="{{ old('apellido') }}">
				@error('apellido')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="identificacion" class="form-label">Identificacion</label>
				<input type="text" class="form-control" id="identificacion" name="identificacion" value="{{ old('identificacion') }}">
				@error('identificacion')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="correo" class="form-label">Correo electronico</label>
				<input type="email" class="form-control" id="correo" name="correo" value="{{ old('correo') }}">
				@error('correo')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="direccion" class="form-label">Direccion</label>
				<input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion') }}">
				@error('direccion')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="telefono" class="form-label">Telefono</label>
				<input type="number" class="form-control" id="telefono" name="telefono" value="{{ old('telefono') }}">
				@error('telefono')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="fechanacimiento" class="form-label">Fecha de nacimiento</label>
				<input type="date" class="form-control" id="fechanacimiento" name="fechanacimiento" value="{{ old('fechanacimiento') }}">
				@error('fechanacimiento')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="edad" class="form-label">Edad</label>
				<input type="number" class="form-control" id="edad" name="edad" value="{{ old('edad') }}">
				@error('edad')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="estudios" class="form-label">Estudios</label>
				<input type="text" class="form-control" id="estudios" name="estudios" value="{{ old('estudios') }}">
				@error('estudios')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="competencias" class="form-label">Competencias</label>
				<input type="text" class="form-control" id="competencias" name="competencias" value="{{ old('competencias') }}">
				@error('competencias')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="experiencialaboral" class="form-label">Experiencia laboral</label>
				<input type="text" class="form-control" id="experiencialaboral" name="experiencialaboral" value="{{ old('experiencialaboral') }}">
				@error('experiencialaboral')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="referencialaboral" class="form-label">Referencia laboral</label>
				<input type="text" class="form-control" id="referencialaboral" name="referencialaboral" value="{{ old('referencialaboral') }}">
				@error('referencialaboral')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="referenciapersonal" class="form-label">Referencia personal</label>
				<input type="text" class="form-control" id="referenciapersonal" name="referenciapersonal" value="{{ old('referenciapersonal') }}">
				@error('referenciapersonal')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="fecharegistro" class="form-label">Fecha de registro</label>
				<input type="date" class="form-control" id="fecharegistro" name="fecharegistro" value="{{ old('fecharegistro') }}">
				@error('fecharegistro')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6 mt-3">
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
		</form>
	</div>
</div>

@endsection
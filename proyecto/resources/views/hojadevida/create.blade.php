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
				<label for="fecharegistro" class="form-label">Fecha de registro</label>
				<input type="date" class="form-control" id="fecha" name="fecharegistro" value="{{ old('fecharegistro') }}" readonly>
				@error('fecharegistro')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
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
				<label for="tipoidentificacion" class="form-label">Tipo de identificación</label>
				<select class="form-control" id="tipoidentificacion" name="tipoidentificacion" value="{{ old('tipoidentificacion')}}">
					<option value="">Seleccionar...</option>
					<option value="Cedula ciudadania">Cedula ciudadania</option>
				</select>
				@error('tipoidentificacion')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="identificacion" class="form-label">Número de identificación</label>
				<input type="text" class="form-control" id="identificacion" name="identificacion" value="{{ old('identificacion') }}">
				@error('identificacion')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="estadocivil" class="form-label">Estado civil</label>
				<select class="form-control" id="estadocivil" name="estadocivil" value="{{ old('estadocivil')}}">
					<option value="">Seleccionar...</option>
					<option value="Soltero">Soltero</option>
				</select>
				@error('estadocivil')
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
				<label for="direccion" class="form-label">Direccion de domicilio</label>
				<input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion') }}">
				@error('direccion')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="telefonoprincipal" class="form-label">Telefono principal</label>
				<input type="number" class="form-control" id="telefonoprincipal" name="telefonoprincipal" value="{{ old('telefonoprincipal') }}">
				@error('telefonoprincipal')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="telefonosecundario" class="form-label">Telefono secundario</label>
				<input type="number" class="form-control" id="telefonosecundario" name="telefonosecundario" value="{{ old('telefonosecundario') }}">
				@error('telefonosecundario')
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
				<select class="form-control" id="estudios" name="estudios" value="{{ old('estudios') }}">
				<option value="">Seleccionar</option>
								<option value="Bachiller academico">Completo (Grado 11)</option>
								<option value="Bachiller incompleto">Incompleto (Grado 6-9)</option>
								<option value="Primaria">Primaria (Grado 5)</option>
							</select>
				@error('estudios')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="otrosestudios" class="form-label">Otros estudios</label>
				<select class="form-control" id="otrosestudios" name="otrosestudios" value="{{ old('otrosestudios') }}">
				<option value="">Seleccionar</option>
								<option value="Universidad">Universidad</option>
								<option value="Tecnico">Tecnico</option>
								<option value="Tecnologo">Tecnologo</option>
								<option value="Profesional">Profesional</option>
								<option value="Maestria">Maestria</option>
							</select>
				@error('otrosestudios')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="detallecarrera" class="form-label">Detalle de la carrera</label>
				<input type="text" class="form-control" id="detallecarrera" name="detallecarrera" value="{{ old('detallecarrera') }}">
				@error('detallecarrera')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="institucion" class="form-label">Institución</label>
				<input type="text" class="form-control" id="institucion" name="institucion" value="{{ old('institucion') }}">
				@error('institucion')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="estado" class="form-label">Estado de la carrera</label>
				<select class="form-control" id="estado" name="estado" value="{{ old('estado') }}">
				<option value="">Seleccionar</option>
								<option value="Completo">Completo</option>
								<option value="Incompleto">Incompleto</option>
								<option value=">En curso">En curso</option>
							</select>
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
				<label for="fechaingreso" class="form-label">Fecha de ingreso a la empresa</label>
				<input type="date" class="form-control" id="fechaingreso" name="fechaingreso" value="{{ old('fechaingreso') }}">
				@error('fechaingreso')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="fechasalida" class="form-label">Fecha de salida de la empresa</label>
				<input type="date" class="form-control" id="fechasalida" name="fechasalida" value="{{ old('fechasalida') }}">
				@error('fechasalida')
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
			<div class="col-md-6 mt-3">
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
		</form>
	</div>
</div>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function() {

		var now = new Date();

		var day = ("0" + now.getDate()).slice(-2);
		var month = ("0" + (now.getMonth() + 1)).slice(-2);

		var today = now.getFullYear() + "-" + (month) + "-" + (day);
		$("#fecha").val(today);
	});
</script>
@endsection
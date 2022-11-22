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
			<form action="{{ route('hojadevida.update', $hojadevida)}}" method="POST">
				@csrf
				@method('PUT')
            
				<div class="col-md-6">
					<label for="nombre" class="form-control-label">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre', $hojadevida->nombre)}}">
				
				@error('nombre')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="apellido" class="form-control-label">Apellido</label>
					<input type="text" class="form-control" id="apellido" name="apellido" value="{{old('apellido', $hojadevida->apellido)}}">
				
				@error('tipoentrevista')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="identificacion" class="form-control-label">Identificacion</label>
					<input type="number" class="form-control" id="identificacion" name="identificacion" value="{{old('identificacion', $hojadevida->identificacion)}}">
				
				@error('identificacion')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="correo" class="form-control-label">Correo</label>
					<input type="email" class="form-control" id="correo" name="correo" value="{{old('correo', $hojadevida->correo)}}">
				
				@error('correo')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="direccion" class="form-control-label">Direccion</label>
					<input type="text" class="form-control" id="direccion" name="direccion" value="{{old('direccion', $hojadevida->direccion)}}">
				
				@error('direccion')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="telefono" class="form-control-label">Telefono</label>
					<input type="number" class="form-control" id="telefono" name="telefono" value="{{old('telefono', $hojadevida->telefono)}}">
				
				@error('telefono')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="fechanacimiento" class="form-control-label">Fecha de nacimiento</label>
					<input type="date" class="form-control" id="fechanacimiento" name="fechanacimiento" value="{{old('fechanacimiento', $hojadevida->fechanacimiento)}}">
				
				@error('fechanacimiento')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="edad" class="form-control-label">Edad</label>
					<input type="number" class="form-control" id="edad" name="edad" value="{{old('edad', $hojadevida->edad)}}">
				
				@error('edad')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="estudios" class="form-control-label">Estudios</label>
					<input type="text" class="form-control" id="estudios" name="estudios" value="{{old('estudios', $hojadevida->estudios)}}">
				
				@error('estudios')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="competencias" class="form-control-label">Competencias</label>
					<input type="text" class="form-control" id="competencias" name="competencias" value="{{old('competencias', $hojadevida->competencias)}}">
				
				@error('competencias')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				
				<div class="col-md-6">
					<label for="experiencialaboral" class="form-control-label">Experiencia laboral</label>
					<input type="text" class="form-control" id="experiencialaboral" name="experiencialaboral" value="{{old('experiencialaboral', $hojadevida->experiencialaboral)}}">
				
				@error('experiencialaboral')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="referencialaboral" class="form-control-label">Referencia laboral</label>
					<input type="text" class="form-control" id="referencialaboral" name="referencialaboral" value="{{old('referencialaboral', $hojadevida->referencialaboral)}}">
				
				@error('referencialaboral')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="referenciapersonal" class="form-control-label">Referencia personal</label>
					<input type="text" class="form-control" id="referenciapersonal" name="referenciapersonal" value="{{old('referenciapersonal', $hojadevida->referenciapersonal)}}">
				
				@error('referenciapersonal')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="fecharegistro" class="form-control-label">Fecha de registro</label>
					<input type="date" class="form-control" id="fecharegistro" name="fecharegistro" value="{{old('fecharegistro', $hojadevida->fecharegistro)}}">
				
				@error('fecha')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<br>
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary">Actualizar</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
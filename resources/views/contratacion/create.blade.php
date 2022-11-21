@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<a href="{{ route('vacante.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
		<form action="{{ route('vacante.store') }}" method="POST">
			@csrf
			<div class="col-md-6">
				<label for="experiencia" class="form-label">Experiencia</label>
				<input type="text" class="form-control" id="experiencia" name="experiencia" value="{{ old('experiencia') }}">
				@error('experiencia')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="horario" class="form-label">Horario</label>
				<input type="text" class="form-control" id="horario" name="horario" value="{{ old('horario') }}">
				@error('horario')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="horario" class="form-label">Disponibilidad</label>
				<input type="text" class="form-control" id="disponibilidad" name="disponibilidad" value="{{ old('disponibilidad') }}">
				@error('disponibilidad')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="idperfil" class="form-label">Perfil</label>
				<select class="form-control" id='idperfil' name='idperfil' value="{{ old('idperfil') }}">
					<option value="">Seleccionar ...</option>
					@foreach($perfils as $perfil)
					<option value="{{ $perfil->idperfil }}">{{ $perfil->nombre }}</option>
					@endforeach
				</select>
				@error('idperfil')
				<small class="text-danger">Seleccione un Perfil</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="idcargo" class="form-label">Salario</label>
				<select class="form-control" id='idcargo' name='idcargo' value="{{ old('idcargo') }}">
					<option value="">Seleccionar ...</option>
					@foreach($cargos as $cargo)
					<option value="{{ $cargo->idcargo }}">{{ $cargo->salario }}</option>
					@endforeach
				</select>
				@error('idcargo')
				<small class="text-danger">Seleccione un Salario</small>
				@enderror
			</div>
			<div class="col-md-6 mt-3">
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
		</form>
	</div>
</div>

@endsection
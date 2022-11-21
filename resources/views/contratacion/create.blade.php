@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<a href="{{ route('contratacion.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
		<form action="{{ route('contratacion.store') }}" method="POST">
			@csrf
			<div class="col-md-6">
				<label for="terminolaboral" class="form-label">Termino Laboral</label>
				<input type="text" class="form-control" id="terminolaboral" name="terminolaboral" value="{{ old('terminolaboral') }}">
				@error('terminolaboral')
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
				<label for="sueldo" class="form-label">Sueldo</label>
				<input type="text" class="form-control" id="sueldo" name="sueldo" value="{{ old('sueldo') }}">
				@error('sueldo')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="idcolaborador" class="form-label">I'd Colaborador</label>
				<select class="form-control" id='idcolaborador' name='idcolaborador' value="{{ old('idcolaborador') }}">
					<option value="">Seleccionar ...</option>
					@foreach($colaboradores as $colaborador)
					<option value="{{ $colaborador->idcolaborador }}">{{ $colaborador->idcolaborador }}</option>
					@endforeach
				</select>
				@error('idcolaborador')
				<small class="text-danger">Seleccione un Colaborador</small>
				@enderror
			</div>

			<div class="col-md-6">
				<label for="idaspirante" class="form-label">Id Aspirante</label>
				<select class="form-control" id='idaspirante' name='idaspirante' value="{{ old('idaspirante') }}">
					<option value="">Seleccionar ...</option>
					@foreach($aspirantes as $aspirante)
					<option value="{{ $aspirante->idaspirante }}">{{ $aspirante->idaspirante }}</option>
					@endforeach
				</select>
				@error('idaspirante')
				<small class="text-danger">Seleccione un Aspirante</small>
				@enderror
			</div>
			<div class="col-md-6 mt-3">
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
		</form>
	</div>
</div>

@endsection

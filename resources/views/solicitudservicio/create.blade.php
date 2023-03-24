@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<a href="{{ route('solicitudservicio.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
		<form action="{{ route('solicitudservicio.store') }}" method="POST">
			@csrf
			<div class="col-md-6">
				<label for="fechasolicitud" class="form-label">Fecha de la Solicitud</label>
				<input type="date" class="form-control" id="fechasolicitud" name="fechasolicitud" value="{{ old('fechasolicitud') }}">
				@error('fechasolicitud')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="id" class="form-label">Nombre del cliente</label>
				<select class="form-control" id='id' name='id' value="{{ old('id') }}">
					<option value="">Seleccionar ...</option>
					@foreach($user as $users)
					<option value="{{ $users->id }}">{{ $users->nombre_apellido }}</option>
					@endforeach
				</select>
				@error('id')
				<small class="text-danger">Seleccione un cliente</small>
				@enderror
			</div>
			<div class="col-md-6 mt-3">
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
		</form>
	</div>
</div>

@endsection
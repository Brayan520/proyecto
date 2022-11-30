@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<a href="{{ route('pqrs.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
		<form action="{{ route('pqrs.store') }}" method="POST">
			@csrf
			<div class="col-md-6">
				<label for="descripcion" class="form-label">Descripcion</label>
				<input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion') }}">
				@error('descripcion')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="fecha" class="form-label">Fecha de la pqrs</label>
				<input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha') }}">
				@error('fecha')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="idtipopqrs" class="form-label">Tipo de pqrs</label>
				<select class="form-control" id='idtipopqrs' name='idtipopqrs' value="{{ old('idtipopqrs') }}">
					<option value="">Seleccionar ...</option>
					@foreach($tipopqrss as $tipopqrs)
					<option value="{{ $tipopqrs->idtipopqrs }}">{{ $tipopqrs->tipo }}</option>
					@endforeach
				</select>
				@error('idtipopqrs')
				<small class="text-danger">Seleccione el tipo de la pqrs</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="idestado" class="form-label">Estado de la pqrs</label>
				<select class="form-control" id='idestado' name='idestado' value="{{ old('idestado') }}">
					<option value="">Seleccionar ...</option>
					@foreach($estados as $estado)
					<option value="{{ $estado->idestado }}">{{ $estado->tipo }}</option>
					@endforeach
				</select>
				@error('idestado')
				<small class="text-danger">Seleccione el estado</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="idcontratoservicio" class="form-label">Direccion</label>
				<select class="form-control" id='idcontratoservicio' name='idcontratoservicio' value="{{ old('idcontratoservicio') }}">
					<option value="">Seleccionar ...</option>
					@foreach($contratoservicios as $contratoservicio)
					<option value="{{ $contratoservicio->idcontratoservicio }}">{{ $contratoservicio->direccion }}</option>
					@endforeach
				</select>
				@error('idcargo')
				<small class="text-danger">Seleccione la direccion</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="idrespuesta" class="form-label">Respuesta</label>
				<select class="form-control" id='idrespuesta' name='idrespuesta' value="{{ old('idrespuesta') }}">
					<option value="">Seleccionar ...</option>
					@foreach($respuestas as $respuesta)
					<option value="{{ $respuesta->idrespuesta }}">{{ $respuesta->respuesta }}</option>
					@endforeach
				</select>
				@error('idrespuesta')
				<small class="text-danger">Seleccione la respuesta</small>
				@enderror
			</div>
			<div class="col-md-6 mt-3">
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
		</form>
	</div>
</div>

@endsection
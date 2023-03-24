@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<a href="{{ route('detalleservicio.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
		<form action="{{ route('detalleservicio.store') }}" method="POST">
			@csrf
			<div class="col-md-6">
				<label for="cantidadpersonal" class="form-label">Cantidad del personal</label>
				<input type="text" class="form-control" id="cantidadpersonal" name="cantidadpersonal" value="{{ old('cantidadpersonal') }}">
				@error('cantidadpersonal')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="total" class="form-label">Precio total</label>
				<input type="text" class="form-control" id="total" name="total" value="{{ old('total') }}">
				@error('total')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="idsolicitudservicio" class="form-label">Fecha de la solicitud</label>
				<select class="form-control" id='idsolicitudservicio' name='idsolicitudservicio' value="{{ old('idsolicitudservicio') }}">
					<option value="">Seleccionar ...</option>
					@foreach($solicitudservicios as $solicitudservicio)
					<option value="{{ $solicitudservicio->idsolicitudservicio }}">{{ $solicitudservicio->fechasolicitud }}</option>
					@endforeach
				</select>
				@error('idsolicitudservicio')
				<small class="text-danger">Seleccione una fecha</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="idservicio" class="form-label">Tipo del servicio</label>
				<select class="form-control" id='idservicio' name='idservicio' value="{{ old('idservicio') }}">
					<option value="">Seleccionar ...</option>
					@foreach($servicios as $servicio)
					<option value="{{ $servicio->idservicio }}">{{ $servicio->tiposervicio }}</option>
					@endforeach
				</select>
				@error('idservicio')
				<small class="text-danger">Seleccione un servicio</small>
				@enderror
			</div>
			<div class="col-md-6 mt-3">
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
		</form>
	</div>
</div>

@endsection
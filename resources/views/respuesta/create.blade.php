@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<a href="{{ route('pqrsadmin.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
		<form action="{{ route('respuesta.store') }}" method="POST">
			@csrf
			<div class="col-md-6">
				<label for="fecha" class="form-label">Fecha</label>
				<input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha') }}" readonly>
				@error('fecha')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="respuesta" class="form-label">Respuesta</label>
				<input type="text" class="form-control" id="respuesta" name="respuesta" value="{{ old('respuesta') }}">
				@error('respuesta')
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
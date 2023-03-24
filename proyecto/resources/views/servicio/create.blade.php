@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<a href="{{ route('servicio.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
		<form action="{{ route('servicio.store') }}" method="POST">
			@csrf
			<div class="col-md-6">
				<label for="tiposervicio" class="form-label">Tipo del servicio</label>
				<input type="text" class="form-control" id="tiposervicio" name="tiposervicio" value="{{ old('tiposervicio') }}">
				@error('tiposervicio')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="precio" class="form-label">Precio del servicio</label>
				<input type="text" class="form-control" id="precio" name="precio" value="{{ old('precio') }}">
				@error('precio')
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
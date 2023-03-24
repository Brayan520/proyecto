@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<a href="{{ route('cargo.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
		<form action="{{ route('cargo.store') }}" method="POST">
			@csrf
			<div class="col-md-6">
				<label for="nombre" class="form-label">Nombre del cargo</label>
				<input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
				@error('nombre')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="salario" class="form-label">Salario</label>
				<input type="text" class="form-control" id="salario" name="salario" value="{{ old('salario') }}">
				@error('salario')
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
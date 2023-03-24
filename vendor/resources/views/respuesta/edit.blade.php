@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">

				<a href="{{ route('respuesta.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
			<form action="{{ route('respuesta.update', $respuestum)}}" method="POST">
				@csrf
				@method('PUT')
            

				<div class="col-md-6">
					<label for="fecha" class="form-control-label">Fecha de la respuesta</label>
					<input type="date" class="form-control" id="fecha" name="fecha" value="{{old('fecha', $respuestum->fecha)}}">
				
				@error('fecha')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="respuesta" class="form-control-label">Respuesta</label>
					<input type="text" class="form-control" id="respuesta" name="respuesta" value="{{old('respuesta', $respuestum->respuesta)}}">
				
				@error('respuesta')
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
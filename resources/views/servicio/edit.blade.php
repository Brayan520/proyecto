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
			<form action="{{ route('servicio.update', $servicio)}}" method="POST">
				@csrf
				@method('PUT')
            

				<div class="col-md-6">
					<label for="tiposervicio" class="form-control-label">Tipo del servicio</label>
					<input type="text" class="form-control" id="tiposervicio" name="tiposervicio" value="{{old('tiposervicio', $servicio->tiposervicio)}}">
				
				@error('direccion')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="precio" class="form-control-label">Precio</label>
					<input type="text" class="form-control" id="precio" name="precio" value="{{old('precio', $servicio->precio)}}">
				
				@error('fechainicial')
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
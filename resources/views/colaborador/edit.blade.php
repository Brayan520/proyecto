@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">

				<a href="{{ route('colaborador.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
			<form action="{{ route('colaborador.update', $colaborador)}}" method="POST">
				@csrf
				@method('PUT')
            
				<div class="col-md-6">
					<label for="nombre" class="form-label">Nombre</label>
					<input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre', $colaborador->nombre)}}">
					</select>
					@error('nombre')
					<small class="text-danger" role="alert">
					</small>
					@enderror
				</div>

				<div class="col-md-6">
					<label for="apellido" class="form-label">Apellido</label>
					<input type="text" class="form-control" id="apellido" name="apellido" value="{{old('apellido', $colaborador->apellido)}}">
					</select>
					@error('apellido')
					<small class="text-danger" role="alert">
					</small>
					@enderror
				</div>

				<div class="col-md-6">
					<label for="celular" class="form-label">Número de celular</label>
					<input type="phone" class="form-control" id="celular" name="celular" value="{{old('celular', $colaborador->celular)}}">
					</select>
					@error('celular')
					<small class="text-danger" role="alert">
					</small>
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
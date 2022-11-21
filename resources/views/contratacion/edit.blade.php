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
			<form action="{{ route('contratacion.update', $contratacion)}}" method="POST">
				@csrf
				@method('PUT')
            

				<div class="col-md-6">
					<label for="terminolaboral" class="form-control-label">Termino Laboral</label>
					<input type="text" class="form-control" id="terminolaboral" name="terminolaboral" value="{{old('terminolaboral', $contratacion->terminolaboral)}}">
				
				@error('terminolaboral')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="fechainicial" class="form-control-label">Fecha Inicial</label>
					<input type="date" class="form-control" id="fechainicial" name="fechainicial" value="{{old('fechainicial', $contratacion->fechainicial)}}">
				
				@error('fechainicial')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
<label for="fechafinal" class="form-control-label">Fecha Final</label>
					<input type="date" class="form-control" id="fechafinal" name="fechafinal" value="{{old('fechafinal', $contratacion->fechafinal)}}">
				
				@error('fechafinal')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>
				<div class="col-md-6">
<label for="sueldo" class="form-control-label">Sueldo</label>
					<input type="text" class="form-control" id="sueldo" name="sueldo" value="{{old('sueldo', $contratacion->sueldo)}}">
				
				@error('sueldo')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>
            <div class="col-md-6">
					<label for="idperfil" class="form-label">Perfil</label>
					<select id="idperfil" class="form-select" name="idperfil" value="{{old('idperfil')}}">
						<option value="" selected>Seleccionar...</option>
						@foreach($perfils as $perfil)
						<option value="{{ $perfil->idperfil}}" {{ ($vacante->idperfil == $perfil->idperfil)?'selected':''}}>{{$perfil->nombre}}</option>
						@endforeach
					</select>
					@error('idperfil')
					<small class="text-danger" role="alert">
						selecciona un perfil
					</small>
					@enderror
				</div>

				<div class="col-md-6">
					<label for="idcargo" class="form-label">Cargo</label>
					<select id="idcargo" class="form-select" name="idcargo" value="{{old('idcargo')}}">
						<option value="" selected>Seleccionar...</option>
						@foreach($cargos as $cargo)
						<option value="{{ $cargo->idcargo}}" {{($vacante->idcargo == $cargo->idcargo)?'selected':''}}>{{$cargo->salario}}</option>
						@endforeach
					</select>
					@error('idcargo')
					<small class="text-danger" role="alert">
						selecciona un salario
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

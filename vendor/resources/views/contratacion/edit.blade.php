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
					<label for="idcolaborador" class="form-label">Id Colaborador</label>
					<input type="text" class="form-control" id="idcolaborador" name="idcolaborador" value="{{ $colaborador->idcolaborador}}"
					<select id="idcolaborador" class="form-select" name="idcolaborador" value="{{old('idcolaborador')}}">
						<option value="" selected>Seleccionar...</option>
						@foreach($colaboradores as $colaborador)
						<option value="{{ $colaborador->idcolaborador}}" {{ ($contratacion->idcolaborador == $colaborador->idcolaborador)?'selected':''}}>{{$colaborador->idcolaborador}}</option>
						@endforeach
					</select>
					@error('idcolaborador')
					<small class="text-danger" role="alert">
						selecciona un colaborador
					</small>
					@enderror
				</div>

				<div class="col-md-6">
					<label for="idaspirante" class="form-label">Id Aspirante</label>
					<select id="idaspirante" class="form-select" name="idaspirante" value="{{old('idaspirante')}}">
						<option value="" selected>Seleccionar...</option>
						@foreach($aspirantes as $aspirante)
						<option value="{{ $aspirante->idaspirante}}" {{($contratacion->idaspirante == $aspirante->idaspirante)?'selected':''}}>{{$aspirante->idaspirante}}</option>
						@endforeach
					</select>
					@error('idaspirante')
					<small class="text-danger" role="alert">
						selecciona un aspirante
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

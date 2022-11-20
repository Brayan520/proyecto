@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">

				<a href="{{ route('entrevista.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
			<form action="{{ route('entrevista.update', $entrevista)}}" method="POST">
				@csrf
				@method('PUT')
            

				<div class="col-md-6">
					<label for="nombreentrevistador" class="form-control-label">Nombre del Entrevistador</label>
					<input type="text" class="form-control" id="nombreentrevistador" name="nombreentrevistador" value="{{old('nombreentrevistador', $entrevista->nombreentrevistador)}}">
				
				@error('nombreentrevistador')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="tipoentrevista" class="form-control-label">Tipo de entrevista</label>
					<input type="text" class="form-control" id="tipoentrevista" name="tipoentrevista" value="{{old('tipoentrevista', $entrevista->tipoentrevista)}}">
				
				@error('tipoentrevista')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="lugar" class="form-control-label">Lugar de la entrevista</label>
					<input type="text" class="form-control" id="lugar" name="lugar" value="{{old('lugar', $entrevista->lugar)}}">
				
				@error('lugar')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="fecha" class="form-control-label">Fecha de la entrevista</label>
					<input type="date" class="form-control" id="fecha" name="fecha" value="{{old('fecha', $entrevista->fecha)}}">
				
				@error('fecha')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="hora" class="form-control-label">Hora de la entrevista</label>
					<input type="time" class="form-control" id="hora" name="hora" value="{{old('hora', $entrevista->hora)}}">
				
				@error('hora')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

            <div class="col-md-6">
					<label for="idaspirante" class="form-label">Nombre del Aspirante</label>
					<select id="idaspirante" class="form-select" name="idaspirante" value="{{old('idaspirante')}}">
						<option value="" selected>Seleccionar...</option>
						@foreach($aspirantes as $aspirante)
						<option value="{{ $aspirante->idaspirante}}" {{ ($entrevista->idaspirante == $aspirante->idaspirante)?'selected':''}}>{{$aspirante->nombre_apellido}}</option>
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
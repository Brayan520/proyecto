@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">

				<a href="{{ route('puntuacion.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
			<form action="{{ route('puntuacion.update', $puntuacion)}}" method="POST">
				@csrf
				@method('PUT')
            

				<div class="col-md-6">
					<label for="puntuacioncalificacion" class="form-control-label">Puntuacion de la calificacion</label>
					<input type="text" class="form-control" id="puntuacioncalificacion" name="puntuacioncalificacion" value="{{old('puntuacioncalificacion', $puntuacion->puntuacioncalificacion)}}">
				
				@error('puntuacioncalificacion')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="fechapuntuacion" class="form-control-label">Fecha de la puntuacion</label>
					<input type="date" class="form-control" id="fechapuntuacion" name="fechapuntuacion" value="{{old('fechapuntuacion', $puntuacion->fechapuntuacion)}}">
				
				@error('fechapuntuacion')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="observaciones" class="form-control-label">Observaciones</label>
					<input type="text" class="form-control" id="observaciones" name="observaciones" value="{{old('observaciones', $puntuacion->observaciones)}}">
				
				@error('observaciones')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

            <div class="col-md-6">
					<label for="identrevista" class="form-label">Id entrevista</label>
					<select id="identrevista" class="form-select" name="identrevista" value="{{old('identrevista')}}">
						<option value="" selected>Seleccionar...</option>
						@foreach($entrevistas as $entrevista)
						<option value="{{ $entrevista->identrevista}}" {{ ($puntuacion->identrevista == $entrevista->identrevista)?'selected':''}}>{{$entrevista->identrevista}}</option>
						@endforeach
					</select>
					@error('identrevista')
					<small class="text-danger" role="alert">
						selecciona una entrevista
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
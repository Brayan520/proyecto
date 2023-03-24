@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">

				<a href="{{ route('postulacion.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
			<form action="{{ route('postulacion.update', $postulacion)}}" method="POST">
				@csrf
				@method('PUT')
            

				<div class="col-md-6">
					<label for="fechapostulacion" class="form-control-label">Fecha de la postulacion</label>
					<input type="date" class="form-control" id="fechapostulacion" name="fechapostulacion" value="{{old('fechapostulacion', $postulacion->fechapostulacion)}}">
				
				@error('fechapostulacion')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="idvacante" class="form-label">Horario</label>
					<select id="idvacante" class="form-select" name="idvacante" value="{{old('idvacante')}}">
						<option value="" selected>Seleccionar...</option>
						@foreach($vacantes as $vacante)
						<option value="{{ $vacante->idvacante}}" {{($postulacion->idvacante == $vacante->idvacante)?'selected':''}}>{{$vacante->horario}}</option>
						@endforeach
					</select>
					@error('idvacante')
					<small class="text-danger" role="alert">
						selecciona un horario
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
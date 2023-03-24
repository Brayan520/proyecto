@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">

				<a href="{{ route('aspirante.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
			<form action="{{ route('aspirante.update', $aspirante)}}" method="POST">
				@csrf
				@method('PUT')
            
            <div class="col-md-6">
					<label for="idhojadevida" class="form-label">Nombre del aspirante</label>
					<select id="idhojadevida" class="form-select" name="idhojadevida" value="{{old('idhojadevida')}}">
						<option value="" selected>Seleccionar...</option>
						@foreach($hojadevidas as $hojadevida)
						<option value="{{ $hojadevida->idhojadevida}}" {{ ($aspirante->idhojadevida == $hojadevida->idhojadevida)?'selected':''}}>{{$hojadevida->nombre_apellido}}</option>
						@endforeach
					</select>
					@error('idhojadevida')
					<small class="text-danger" role="alert">
						selecciona un aspirante
					</small>
					@enderror
				</div>

				<div class="col-md-6">
					<label for="idpostulacion" class="form-label">Fecha de la postulación</label>
					<select id="idpostulacion" class="form-select" name="idpostulacion" value="{{old('idpostulacion')}}">
						<option value="" selected>Seleccionar...</option>
						@foreach($postulaciones as $postulacion)
						<option value="{{ $postulacion->idpostulacion}}" {{($aspirante->idpostulacion == $postulacion->idpostulacion)?'selected':''}}>{{$postulacion->fechapostulacion}}</option>
						@endforeach
					</select>
					@error('idpostulacion')
					<small class="text-danger" role="alert">
						selecciona una fecha de postulación
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
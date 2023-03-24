@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">

				<a href="{{ route('calificacion.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
			<form action="{{ route('calificacion.update', $calificacion)}}" method="POST">
				@csrf
				@method('PUT')
            

				<div class="col-md-6">
					<label for="puntuacioncalificacion" class="form-control-label">Puntuacion de la calificación</label>
					<input type="text" class="form-control" id="puntuacioncalificacion" name="puntuacioncalificacion" value="{{old('puntuacioncalificacion', $calificacion->puntuacioncalificacion)}}">
				
				@error('puntuacioncalificacion')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="fechacalificacion" class="form-control-label">Fecha de la calificación</label>
					<input type="date" class="form-control" id="fechacalificacion" name="fechacalificacion" value="{{old('fechacalificacion', $calificacion->fechacalificacion)}}">
				
				@error('fechacalificacion')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="observaciones" class="form-control-label">Observaciones</label>
					<input type="text" class="form-control" id="observaciones" name="observaciones" value="{{old('observaciones', $calificacion->observaciones)}}">
				
				@error('observaciones')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="idcontratoservicio" class="form-label">Dirección</label>
					<select id="idcontratoservicio" class="form-select" name="idcontratoservicio" value="{{old('idcontratoservicio')}}">
						<option value="" selected>Seleccionar...</option>
						@foreach($contratoservicios as $contratoservicio)
						<option value="{{ $contratoservicio->idcontratoservicio}}" {{($calificacion->idcontratoservicio == $contratoservicio->idcontratoservicio)?'selected':''}}>{{$contratoservicio->direccion}}</option>
						@endforeach
					</select>
					@error('idcontratoservicio')
					<small class="text-danger" role="alert">
						selecciona una Dirección
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
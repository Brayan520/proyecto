@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">

				<a href="{{ route('pqrs.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
			<form action="{{ route('pqrs.update', $pqrs)}}" method="POST">
				@csrf
				@method('PUT')
            

				<div class="col-md-6">
					<label for="descripcion" class="form-control-label">Descripcion</label>
					<input type="text" class="form-control" id="descripcion" name="descripcion" value="{{old('descripcion', $pqrs->descripcion)}}">
				
				@error('descripcion')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="fecha" class="form-control-label">Fecha de la pqrs</label>
					<input type="date" class="form-control" id="fecha" name="fecha" value="{{old('fecha', $pqrs->fecha)}}">
				
				@error('fecha')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

            <div class="col-md-6">
					<label for="idtipopqrs" class="form-label">Tipo de pqrs</label>
					<select id="idtipopqrs" class="form-select" name="idtipopqrs" value="{{old('idtipopqrs')}}">
						<option value="" selected>Seleccionar...</option>
						@foreach($tipopqrss as $tipopqrs)
						<option value="{{ $tipopqrs->idtipopqrs}}" {{ ($pqrs->idtipopqrs == $tipopqrs->idtipopqrs)?'selected':''}}>{{$tipopqrs->tipo}}</option>
						@endforeach
					</select>
					@error('idtipopqrs')
					<small class="text-danger" role="alert">
						selecciona un tipo de pqrs
					</small>
					@enderror
				</div>

				<div class="col-md-6">
					<label for="idestado" class="form-label">Estado</label>
					<select id="idestado" class="form-select" name="idestado" value="{{old('idestado')}}">
						<option value="" selected>Seleccionar...</option>
						@foreach($estados as $estado)
						<option value="{{ $estado->idestado}}" {{($pqrs->idestado == $estado->idestado)?'selected':''}}>{{$estado->tipo}}</option>
						@endforeach
					</select>
					@error('idestado')
					<small class="text-danger" role="alert">
						selecciona un estado
					</small>
					@enderror
				</div>

				<div class="col-md-6">
					<label for="idcontratoservicio" class="form-label">Direccion</label>
					<select id="idcontratoservicio" class="form-select" name="idcontratoservicio" value="{{old('idcontratoservicio')}}">
						<option value="" selected>Seleccionar...</option>
						@foreach($contratoservicios as $contratoservicio)
						<option value="{{ $contratoservicio->idcontratoservicio}}" {{($pqrs->idcontratoservicio == $contratoservicio->idcontratoservicio)?'selected':''}}>{{$contratoservicio->direccion}}</option>
						@endforeach
					</select>
					@error('idcontratoservicio')
					<small class="text-danger" role="alert">
						selecciona una direccion
					</small>
					@enderror
				</div>

				<div class="col-md-6">
					<label for="idrespuesta" class="form-label">Respuesta</label>
					<select id="idrespuesta" class="form-select" name="idrespuesta" value="{{old('idrespuesta')}}">
						<option value="" selected>Seleccionar...</option>
						@foreach($respuestas as $respuesta)
						<option value="{{ $respuesta->idrespuesta}}" {{($pqrs->idrespuesta == $respuesta->idrespuesta)?'selected':''}}>{{$respuesta->respuesta}}</option>
						@endforeach
					</select>
					@error('idrespuesta')
					<small class="text-danger" role="alert">
						selecciona una respuesta
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
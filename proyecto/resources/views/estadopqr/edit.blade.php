@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">

				<a href="{{ route('estadopqr.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
			<form action="{{ route('estadopqr.update', $pqrsadmin)}}" method="POST">
				@csrf
				@method('PUT')
<br>
				<div class="col-md-6">
					<label for="idestado" class="form-label">Estado</label>
					<select id="idestado" class="form-select" name="idestado" value="{{old('idestado')}}" readonly>
						<option value="" selected>Seleccionar...</option>
						@foreach($estados as $estado)
						<option readonly value="{{ $estado->idestado}}" {{($pqrsadmin->idestado == $estado->idestado)?'selected':''}}>{{$estado->tipo}}</option>
						@endforeach
					</select>
					@error('idestado')
					<small class="text-danger" role="alert">
						selecciona un estado
					</small>
					@enderror
				</div>

                <div class="col-md-6">
					<label for="descripcion" class="form-control-label">Descripcion</label>
					<input readonly style="background-color:lightgray" type="text" class="form-control" id="descripcion" name="descripcion" value="{{old('descripcion', $pqrsadmin->descripcion)}}">
				
				@error('descripcion')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

                <div class="col-md-6">
				<label for="idrespuesta" class="form-label">Respuesta</label>
				<select class="form-control" id='idrespuesta' name='idrespuesta' value="{{ old('idrespuesta') }}">
					<option value="">Seleccionar ...</option>
					@foreach($respuestum as $respuestum)
					<option value="{{ $respuestum->idrespuesta }}">{{ $respuestum->respuesta }}</option>
					@endforeach
				</select>
				@error('idrespuesta')
				<small class="text-danger">Esta respuesta ya existe</small>
				@enderror
			</div>

                <br>
<div class="col-md-12">
					<button type="submit" class="btn btn-primary">Actualizar</button>

				<br>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
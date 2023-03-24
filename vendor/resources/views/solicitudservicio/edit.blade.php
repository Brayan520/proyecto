@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">

				<a href="{{ route('solicitudservicio.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
			<form action="{{ route('solicitudservicio.update', $solicitudservicio)}}" method="POST">
				@csrf
				@method('PUT')
            

				<div class="col-md-6">
					<label for="fechasolicitud" class="form-control-label">Fecha de la solicitud</label>
					<input type="date" class="form-control" id="fechasolicitud" name="fechasolicitud" value="{{old('fechasolicitud', $solicitudservicio->fechasolicitud)}}">
				
				@error('fechasolicitud')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="id" class="form-label">Nombre del cliente</label>
					<select id="id" class="form-select" name="id" value="{{old('id')}}">
						<option value="" selected>Seleccionar...</option>
						@foreach($user as $users)
						<option value="{{ $users->id}}" {{($solicitudservicio->id == $users->id)?'selected':''}}>{{$users->nombre_apellido}}</option>
						@endforeach
					</select>
					@error('id')
					<small class="text-danger" role="alert">
						selecciona un cliente
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
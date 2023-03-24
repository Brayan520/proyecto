@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">

				<a href="{{ route('contratoservicio.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
			<form action="{{ route('contratoservicio.update', $contratoservicio)}}" method="POST">
				@csrf
				@method('PUT')
            

				<div class="col-md-6">
					<label for="direccion" class="form-control-label">Direccion</label>
					<input type="text" class="form-control" id="direccion" name="direccion" value="{{old('direccion', $contratoservicio->direccion)}}">
				
				@error('direccion')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="fechainicial" class="form-control-label">Fecha Inicial</label>
					<input type="date" class="form-control" id="fechainicial" name="fechainicial" value="{{old('fechainicial', $contratoservicio->fechainicial)}}">
				
				@error('fechainicial')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="fechafinal" class="form-control-label">Fecha Final</label>
					<input type="date" class="form-control" id="fechafinal" name="fechafinal" value="{{old('fechafinal', $contratoservicio->fechafinal)}}">
				
				@error('fechafinal')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="idsolicitudservicio" class="form-label">Fecha Solicitud</label>
					<select id="idsolicitudservicio" class="form-select" name="idsolicitudservicio" value="{{old('idsolicitudservicio')}}">
						<option value="" selected>Seleccionar...</option>
						@foreach($solicitudservicios as $solicitudservicio)
						<option value="{{ $solicitudservicio->idsolicitudservicio}}" {{($contratoservicio->idsolicitudservicio == $solicitudservicio->idsolicitudservicio)?'selected':''}}>{{$solicitudservicio->fechasolicitud}}</option>
						@endforeach
					</select>
					@error('idsolicitudservicio')
					<small class="text-danger" role="alert">
						selecciona una solicitud del servicio
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
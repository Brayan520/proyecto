@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">

				<a href="{{ route('colaborador.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
			<form action="{{ route('colaborador.update', $colaborador)}}" method="POST">
				@csrf
				@method('PUT')
            
				<div class="col-md-6">
					<label for="idcontratoservicio" class="form-label">Dirección</label>
					<select id="idcontratoservicio" class="form-select" name="idcontratoservicio" value="{{old('idcontratoservicio')}}">
						<option value="" selected>Seleccionar...</option>
						@foreach($contratoservicios as $contratoservicio)
						<option value="{{ $contratoservicio->idcontratoservicio}}" {{($colaborador->idcontratoservicio == $contratoservicio->idcontratoservicio)?'selected':''}}>{{$contratoservicio->direccion}}</option>
						@endforeach
					</select>
					@error('idcontratoservicio')
					<small class="text-danger" role="alert">
						selecciona una dirección
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
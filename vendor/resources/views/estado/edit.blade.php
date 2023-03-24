@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">

				<a href="{{ route('estado.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
			<form action="{{ route('estado.update', $estado)}}" method="POST">
				@csrf
				@method('PUT')
            

				<div class="col-md-6">
					<label for="tipo" class="form-control-label">Estado</label>
					<input type="text" class="form-control" id="tipo" name="tipo" value="{{old('tipo', $estado->tipo)}}">
				
				@error('tipo')
				<small class="text-danger"> {{ $message}}</small>
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
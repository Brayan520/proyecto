@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div align="right">
				<a href="{{ route('perfil.create') }}" class="btn btn-primary">Agregar</a>
				<a href="{{ route('home') }}" class="btn btn-success ti-home"></a>
			</div>	
		</div>
		
		<div class="col-md-12">
			<h2 class="text-success">Perfiles</h2>
		</div>
		@if (sizeof($perfils) > 0)
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre del perfil</th>
					<th class="text-center" width="20%">Opciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($perfils as $perfil)
				<tr>
					<td>{{ $perfil->idperfil }}</td>
					<td>{{ $perfil->nombre }}</td>
					<td class="text-center">
						<a href="{{ route('perfil.edit', $perfil) }}" class="btn btn-success ti-pencil-alt"></a>
						<form action="{{ route('perfil.destroy', $perfil) }}" method="POST" class="d-inline-block">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger ti-trash"
							onclick="return confirm('¿Está seguro de eliminar el perfil?!!')"></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="d-flex justify-content-center">
			
		</div>
		@else
		<div class="alert alert-secondary"><h3>No se encontraron Perfiles</h3></div>
		@endif
	</div>
</div>

@endsection    

@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cliente</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script
	src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script
	src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="static/css/pie_pagina.css"
	th:href="@{css/pie_pagina.css}">
<link rel="stylesheet" href="static/css/Encabezado-Cliente.css"
	th:href="@{css/Encabezado-Cliente.css}">
<link rel="stylesheet" href="static/css/PQRS.css"
	th:href="@{css/PQRS.css}">
</head>
<style>
.container-fluid{
    background-color: #C9C8C8;
}
.texto2{
    padding-left: 10%;
}
img{
    width: 40%;
    height: 80%;
}
.iconos{
    margin-bottom: 5%; 
}
.boton .facebook{
    background: #3b5998;
    color: #fff;
    padding: 4px;
}
.boton .instagram{
    background: #d11d62;
    color: rgb(255, 255, 255);
    padding: 4px;
}
.boton .email{
    background: #ffffff;
    color: rgb(255, 0, 0);
    padding: 4px;
}
.boton .mobile{
    background: #14ac14;
    color: rgb(255, 255, 255);
    padding: 4px;
}
.encabezado{
    background-color: #dddada;
}   
.logo{
    height: 90px;
    width: 160px;
    margin-top: 5px;
    margin-left: 20px;
}
.nproyecto{
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    margin-top: 20px;
    margin-right: 50%;
    font-weight: bold;
}
.imagenpeticion{
    height: 70%; 
    width: 80%;
    margin-left: 25%;
}
.imagenqueja{
    height: 100%; 
    width: 80%;
    margin-left: 25%;
}
.imagenreclamo{
    height: 100%; 
    width: 80%;
    margin-left: 25%;
}
.imagensugerencia{
    height: 80%; 
    width: 80%;
    margin-left: 25%;
}
.texto{
    margin-left: 5%;
    margin-right: 5%;
}

    </style>


<body>
<div class="w3-bar w3-black" style="margin-top: -23px;">
					<a style="text-decoration: none;" href="{{ route('cliente.index') }}" class="w3-bar-item w3-button ">Inicio</a> 
					<a style="text-decoration: none;" href="{{ route('catalogoservicio.index') }}" class="w3-bar-item w3-button">Catalogo
						de servicio</a> <a style="text-decoration: none;" href="{{ route('trabajaconnosotros.index') }}" class="w3-bar-item w3-button">Trabaja
						con nosotros</a> <a style="text-decoration: none;" href="{{ route('pqrs.index') }}" class="w3-bar-item w3-button">PQRS</a>
						<a style="text-decoration: none;" href="{{ route('calificaciones.index') }}" class="w3-bar-item w3-button">Calificaciones</a>
					<a style="text-decoration: none;" href="{{ route('quienessomos.index') }}" class="w3-bar-item w3-button">Quienes
						somos</a> <a style="text-decoration: none;" href="{{ route('contactanos.index') }}" class="w3-bar-item w3-button">Contactanos</a>
				</div>
<div class="container">

	<hr>
	<center>
	<h2 style="font-weight:bold">Registrar PQRS:</h2>
	<hr>	
		<div class="col-md-12">
		<form action="{{ route('pqrs.store') }}" method="POST">
			@csrf

            <div class="col-md-6">
				<label for="fecha" class="form-label" style="font-weight:bold">Fecha de la pqrs</label>
				<input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha') }}" readonly>
				@error('fecha')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>

            <div class="col-md-6">
				<label for="idtipopqrs" class="form-label" style="font-weight:bold">Tipo de pqrs</label>
				<select class="form-control" id='idtipopqrs' name='idtipopqrs' value="{{ old('idtipopqrs') }}">
					<option value="">Seleccionar ...</option>
					@foreach($tipopqrss as $tipopqrs)
					<option value="{{ $tipopqrs->idtipopqrs }}">{{ $tipopqrs->tipo }}</option>
					@endforeach
				</select>
				@error('idtipopqrs')
				<small class="text-danger">Seleccione el tipo de la pqrs</small>
				@enderror
			</div>
            
			<div class="col-md-6">
				<label for="descripcion" class="form-label" style="font-weight:bold"> Descripcion</label>
				<textarea type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion') }}"></textarea>
				@error('descripcion')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
            <div class="col-md-6">
				<label for="idcontratoservicio" class="form-label" style="font-weight:bold">Fecha solicitud del servicio</label>
				<select class="form-control" id='idcontratoservicio' name='idcontratoservicio' value="{{ old('idcontratoservicio') }}">
					<option value="">Seleccionar ...</option>
					@foreach($contratoservicios as $contratoservicio)
					<option value="{{ $contratoservicio->idcontratoservicio }}">{{ $contratoservicio->solicitudservicios->fechasolicitud }}</option>
					@endforeach
				</select>
				@error('idcontratoservicio')	
				<small class="text-danger">{{$message}}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="idestado" class="form-label" style="font-weight:bold">Estado de la pqrs</label>
				<select class="form-control" id='idestado' name='idestado' value="{{ old('idestado') }}" readonly>
					<option value="1">Activo</option>
				</select>
				

			</div>
			<div class="col-md-6 mt-3">
				<button type="submit" class="btn btn-primary" onclick="confirm('Seguro que quieres enviar tu PQRS?')">Enviar PQRS</button>
			</div>
</center>
		</form>
	</div>
	<br>
	<br>
    <script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function() {

		var now = new Date();

		var day = ("0" + now.getDate()).slice(-2);
		var month = ("0" + (now.getMonth() + 1)).slice(-2);

		var today = now.getFullYear() + "-" + (month) + "-" + (day);
		$("#fecha").val(today);
	});
</script>
</div>
<footer>
			<div class="container-fluid text-black" style="margin-bottom:-35px;">
				<div class="row">
					<div class="col-md-4" style="margin-top: 2%;">
						<div class="w3-center">
							<img src="https://i.postimg.cc/JDRWF342/QS.png" style="height: 130px; width: 200px;" alt="">
						</div>
						<div class=" texto w3-center">
							<h6 style="font-weight: bold;">!!HOMETOR te brinda mejores
								ambientes¡¡</h6>
						</div>
					</div>
					<div class=" iconos col-md-4 w3-center" style="padding-top: 65px;">
						<div class="row"
							style="border-bottom: 1px solid black; padding-bottom: 10px;">
							<div class="col-md-1"></div>
							<div class="col-md-1"></div>
							<div class="col-md-1"></div>
							<div class="col-md-1"></div>
							<div class="col-md-1 w3-center">
								<div class="boton">
									<button style="text-decoration: none;" type="button" class="wtn social facebook w3-circle">
										<a
										style="text-decoration: none;" href="https://www.facebook.com/Hometor-Colombia-112755977566197"
											class="ti-facebook"></a>
									</button>
								</div>
							</div>
							<div class="col-md-1 w3-center">
								<div class="boton">
									<button style="text-decoration: none;" type="button" class="wtn social instagram w3-circle">
										<a style="text-decoration: none;" href="https://www.instagram.com/hometorcolombia/?hl=es-la"
											class="ti-instagram"></a>
									</button>
								</div>
							</div>
							<div class="col-md-1 w3-center">
								<div class="boton">
									<button style="text-decoration: none;" type="button" class="wtn social email w3-circle">
										<a style="text-decoration: none;" href="mailto:info@kontorcolombia.co" class="ti-email"></a>
									</button>
								</div>
							</div>
							<div class="col-md-1 w3-center">
								<div class="boton">
									<button type="button" class="wtn social mobile w3-circle">
										<a style="text-decoration: none;" href="tel:+57 (313)5519978" class="ti-mobile"></a>
									</button>
								</div>
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-1"></div>
							<div class="col-md-1"></div>
							<div class="col-md-1"></div>
						</div>
					</div>
					<div class="col-m4-d texto2" style=" margin-left: 900px; margin-top: -150px">
						<a style="text-decoration: none;" href="mailto:info@kontorcolombia.co">
							<h5 style="font-weight: bold; color: black; text-decoration: none;">Correo:
								info@kontorcolombia.co</h5>
						</a>
						<h5 style="font-weight: bold; color: black;">Ciudad: Bogotá
							D.C</h5>
						<a style="text-decoration: none;" href="tel:+57 (313)5519978">
							<h5  style="font-weight: bold; color: black; text-decoration: none;">Telefono: +57
								(313)5519978</h5>
						</a>
					</div>
					<p style="margin-left: 42%; font-weight: bold; margin-top: -5%;">©2022
						Hecho por: Quattro soft</p>
				</div>
            </div>
	</footer>
	</body>
</html>
@endsection
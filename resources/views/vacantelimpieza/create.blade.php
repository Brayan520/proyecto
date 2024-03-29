@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Quienes Somos</title>
	<link rel="stylesheet" href="static/css/Quienes-somos.css" th:href="@{css/Quienes-somos.css}" media="screen">
	<link rel="stylesheet" href="static/css/Encabezado-Cliente.css" th:href="@{css/Encabezado-Cliente.css}" media="screen">
	<link rel="stylesheet" href="static/css/pie_pagina.css" th:href="@{css/pie_pagina.css}" media="screen">

</head>

<style>
	.container-fluid {
		background-color: #C9C8C8;
	}

	.texto2 {
		padding-left: 10%;
	}

	img {
		width: 40%;
		height: 80%;
	}

	.iconos {
		margin-bottom: 5%;
	}

	.boton .facebook {
		background: #3b5998;
		color: #fff;
		padding: 4px;
	}

	.boton .instagram {
		background: #d11d62;
		color: rgb(255, 255, 255);
		padding: 4px;
	}

	.boton .email {
		background: #ffffff;
		color: rgb(255, 0, 0);
		padding: 4px;
	}

	.boton .mobile {
		background: #14ac14;
		color: rgb(255, 255, 255);
		padding: 4px;
	}

	.encabezado {
		background-color: #dddada;
	}

	.logo {
		height: 90px;
		width: 160px;
		margin-top: 5px;
		margin-left: 20px;
	}

	.nproyecto {
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
		margin-top: 20px;
		margin-right: 50%;
		font-weight: bold;
	}

	.fondo {
		background-image: linear-gradient(#478ac9, #ccd3db);
	}

	.fondo .imagen {
		width: 176px;
		margin: 24px auto;
	}

	/*En esta parte se modifica las margenes de la imagen y de las casillas del formulario*/
	.fondo .forma {
		width: 570px;
		margin: 12px auto 60px;
	}

	html {
		font-family: Arial, Helvetica, sans-serif;
	}

	body {
		margin: 0;
	}

	input {
		font: inherit;

	}

	/*Aqui se modifica los cuadros y los bordes*/
	.cuadros {
		width: 40%;
		height: 5%;
		padding: 5px;
		border: none;
	}

	.abajo {
		height: auto !important;
	}

	/*Aqui se centra los cuadros y el titulo*/
	.titulo .margen {
		width: var(--theme-sheet-width-xl);
		margin: 0 auto;
	}

	html {
		font-size: 16px;
	}

	.pagina {
		--theme-sheet-width-xl: 1140px;
		line-height: 1.6;
	}

	h2 {
		font-size: 2.25rem;
	}

	/*Aqui se configura la parte de los botones*/
	.u-btn {
		background-color: #478ac9;
		color: #ffffff;
		text-decoration: none;
		padding: 10px 30px;
		margin-left: 290px;
	}
</style>

<body style="font-family: Arial, Helvetica, sans-serif">
	<div class="w3-bar w3-black" style="margin-top: -23px;">
		<a style="text-decoration: none;" href="{{ route('cliente.index') }}" class="w3-bar-item w3-button ">Inicio</a>
		<a style="text-decoration: none;" href="{{ route('catalogoservicio.index') }}" class="w3-bar-item w3-button">Catalogo
			de servicio</a> <a style="text-decoration: none;" href="/shop" class="w3-bar-item w3-button">Trabaja
			con nosotros</a> <a style="text-decoration: none;" href="{{ route('pqrs.index') }}" class="w3-bar-item w3-button">PQRS</a>
		<a style="text-decoration: none;" href="{{ route('calificaciones.index') }}" class="w3-bar-item w3-button">Calificaciones</a>
		<a style="text-decoration: none;" href="{{ route('quienessomos.index') }}" class="w3-bar-item w3-button">Quienes
			somos</a> <a style="text-decoration: none;" href="{{ route('contactanos.index') }}" class="w3-bar-item w3-button">Contactanos</a>
	</div>


	<body class="pagina titulo">
		<section class="fondo">
			<div class=" margen">
				<br>
				<h2 style="font-weight: bold; text-align: center;">Ficha Postulante - Hoja de vida</h2>
				<hr>
				<div class="abajo forma">
					<h2 style="font-weight: bold; text-align: center;">Postulación</h2>
					<form action="{{ route('vacantelimpieza.store') }}" method="POST">
						@csrf
						<div>
							<div style="margin-left: 32%;">
							<label>Fecha</label></div>
							<input style="margin-left: 32%;"style="height: -10%" type="date" class="cuadros" id="fecharegistro" name="fecharegistro" value="{{ old('fecharegistro') }}" readonly>
							@error('fecharegistro')
							<small class="text-danger">{{ $message }}</small>
							@enderror
						</div>
						<hr>
						<label style="margin-left: 32%;">Cargo al que aspira</label>
						<div style="margin-left: 32%;">
							<select style="width: 70%" class="cuadros" id="documento" required readonly>
								<option value="Auxiliar de limpieza y mantenimiento">Auxiliar de limpieza y mantenimiento</option>
							</select>
						</div>
						<hr>
						<div>
							<div>
								<h1 style="font-weight: bold; text-align: center;">Datos personales</h1>
							</div>
							<hr>

							<div>
								<div>
									<label style="margin-left: 10%;" for="nombre">Nombre</label>
								</div>
								<input style="margin-left: 10%;" type="text" placeholder="Introduzca su nombre" class="cuadros" id="nombre" name="nombre" value="{{ old('nombre') }}">
								@error('nombre')
								<small class="text-danger">{{ $message }}</small>
								@enderror
								<div>
									<label style="margin-left: 55%; margin-top: -11%" for="apellido">Apellido</label>
								</div>
								<input style="margin-left: 55%; margin-top: -5.5%" type="text" placeholder="Introduzca su apellido" class="cuadros" id="apellido" name="apellido" value="{{ old('apellido') }}">
								@error('apellido')
								<small class="text-danger">{{ $message }}</small>
								@enderror
							</div>
							<hr>
							<div>
								<div><label style="margin-left: 10%;">Tipo de Documento</label></div>
								<select style="margin-left: 10%;" class="cuadros" id="tipoidentificacion" name="tipoidentificacion" value="{{ old('tipoidentificacion') }}">
									<option value="">Seleccionar</option>
									<option value="CC">Cédula Ciudadania</option>
									<option value="NIT">Nit</option>
									<option value="CE">Cedula Extranjeria</option>
								</select>
								@error('tipoidentificacion')
								<small class="text-danger">{{ $message }}</small>
								@enderror

								<div><label style="margin-left: 55%; margin-top: -11%">Número de Identificación</label></div>
								<input style="margin-left: 55%; margin-top: -5%" type="number" id="identificacion" name="identificacion" value="{{ old('identificacion') }}" placeholder="Introduzca su numero" class="cuadros" required>
								@error('identificacion')
								<small class="text-danger">{{ $message }}</small>
								@enderror
							</div>
							<hr>
							<div>
								<div>
									<label style="margin-left: -15%;">Correo Electronico</label>
								</div>
								<input style="margin-left: -15%;" type="email" id="correo" name="correo" value="{{ old('correo') }}" placeholder="Introduzca una dirección de correo electrónico válida" class="cuadros" required>
								@error('correo')
								<small class="text-danger">{{ $message }}</small>
								@enderror

								<div>
									<label style="margin-left: 35%; margin-top: -11% ">Teléfono</label>
								</div>
								<input style="margin-left: 35%; margin-top: -6%" type="tel" id="telefono" name="telefono" value="{{ old('telefono') }}" placeholder="Ingrese el teléfono principal" class="cuadros" required>
								@error('telefono')
								<small class="text-danger">{{ $message }}</small>
								@enderror

								<div>
									<label style="margin-left: 85%; margin-top: -11% ">Celular</label>
								</div>
								<input style="margin-left: 85%; margin-top: -6%" type="tel" id="celular" name="celular" value="{{ old('celular') }}" placeholder="Ingrese el teléfono secundario" class="cuadros">
								@error('celular')
								<small class="text-danger">{{ $message }}</small>
								@enderror
							</div>
							<hr>
							<div>
								<div>
									<label style="margin-left: -15%;">Barrio</label>
									@error('barrio')
								<small class="text-danger">{{ $message }}</small>
								@enderror
								</div>
								<input style="margin-left: -15%;" type="text" placeholder="Ingrese su Barrio" id="barrio" name="barrio" value="{{ old('barrio') }}" class="cuadros" required>
								<div>
									<label style="margin-left: 35%; margin-top: -11% ">Ciudad</label>
									@error('ciudad')
								<small class="text-danger">{{ $message }}</small>
								@enderror
								</div>
								<input style="margin-left: 35%; margin-top: -6% " type="text" placeholder="Ingrese su Ciudad" id="ciudad" name="ciudad" value="{{ old('ciudad') }}" class="cuadros" required>
								<div>
									<label style="margin-left: 85%; margin-top: -11% ">Dirección</label>
									@error('direccion')
								<small class="text-danger">{{ $message }}</small>
								@enderror
								</div>
								<input style="margin-left: 85%; margin-top: -6% " type="text" placeholder="Dirección de Domicilio" id="direccion" name="direccion" value="{{ old('direccion') }}" class="cuadros" required>
							</div>
							<hr>


							<div>
								<h1 style="font-weight: bold; text-align: center;">Estudios</h1>
								<hr>
								<div>
									<label style="margin-left: 32%;">Bachillerato</label>
								</div>
								<div>
									<select style="margin-left: 32%;" class="cuadros" id="estudios" name="estudios" value="{{ old('estudios') }}" required>
										<option value="">Seleccionar</option>
										<option value="Universidad">Universitario</option>
										<option value="Completo">Completo (Grado 11)</option>
										<option value="Incompleto">Incompleto (Grado 6-9)</option>
										<option value="Primaria">Primaria (Grado 5)</option>
									</select>

								</div>
								<hr>
							</div>
						</div>
				</div>
				<div style="margin-left: 37%; margin-top: -40px;">
					<input type="checkbox" required> <a href="https://alianzafrancesa.edu.co/bogota/tratamiento-datos-personales/"><label>Acepto el
							tratamiento y protección de datos.</a>
					</label>
					<hr>
				</div>
				<input style="margin-left: 42%;" type="submit" class="btn btn-primary" style="margin-left: 390px" id="submit"  onclick="confirm('Seguro que quieres enviar tu hoja de vida?')" value="Registrar postulación">
				</form>
				<br>
				<br>

		</section>
		<footer style="margin-bottom:-35px;">
			<div class="container-fluid text-black">
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
						<div class="row" style="border-bottom: 1px solid black; padding-bottom: 10px;">
							<div class="col-md-1"></div>
							<div class="col-md-1"></div>
							<div class="col-md-1"></div>
							<div class="col-md-1"></div>
							<div class="col-md-1 w3-center">
								<div class="boton">
									<button style="text-decoration: none;" type="button" class="wtn social facebook w3-circle">
										<a style="text-decoration: none;" href="https://www.facebook.com/Hometor-Colombia-112755977566197" class="ti-facebook"></a>
									</button>
								</div>
							</div>
							<div class="col-md-1 w3-center">
								<div class="boton">
									<button style="text-decoration: none;" type="button" class="wtn social instagram w3-circle">
										<a style="text-decoration: none;" href="https://www.instagram.com/hometorcolombia/?hl=es-la" class="ti-instagram"></a>
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
							<h5 style="font-weight: bold; color: black; text-decoration: none;">Telefono: +57
								(313)5519978</h5>
						</a>
					</div>
					<p style="margin-left: 42%; font-weight: bold; margin-top: -5%;">©2022
						Hecho por: Quattro soft</p>
				</div>
			</div>
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
			$(document).ready(function() {

				var now = new Date();

				var day = ("0" + now.getDate()).slice(-2);
				var month = ("0" + (now.getMonth() + 1)).slice(-2);

				var today = now.getFullYear() + "-" + (month) + "-" + (day);
				$("#fecharegistro").val(today);
			});
		</script>
	</body>
	@endsection

</html>
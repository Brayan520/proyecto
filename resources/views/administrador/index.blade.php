@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="Administrador"
	content="width=device-width, initial-scale=1.0">
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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Administrador</title>
<link rel="stylesheet" href="static/css/Administrador.css"
	th:href="@{css/Administrador.css}">
<link rel="stylesheet" href="static/css/pie_pagina.css"
	th:href="@{css/pie_pagina.css}">
<link rel="stylesheet" href="static/css/Encabezado-Administrador.css"
	th:href="@{css/Encabezado-Administrador.css}">
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
.margen-abajo {
  min-height: 864px;
}

.titulo-principal {
  font-size: 30px;
  font-weight: bold;
}

.forma-cuadro {
  grid-template-columns: repeat(3, calc(33.3333% - 20px));
  grid-gap: 30px;
}

.margen-texto {
  padding: 10px;
}

.margen-cuadro {
  height: 48px;
  margin: 30px;
  margin-left: -10%;
}

html {
  font-family: Arial, Helvetica, sans-serif;
}

body {
  margin: 0%;
}

.margen-arriba {
  display: table;
}

.icono img {
  height: 10%;
  width: 15%;
}

.texto-centro {
  text-align: center;
  color: #111111;
  background-color: #f2f2f2;
}

.cuadro {
  display: grid;
}

.fondo-blanco {
  color: #111111;
  background-color: #ffffff;
}

.fondo-gris {
  color: #111111;
  background-color: #f2f2f2;
}

.titulo {
  font-size: 20px;
  font-weight: bold;
  margin: 21px;
}

.texto {
  margin: 29px 1px;
}

.icono-reportes img {
  width: 15%;
}

.icono-pqrs img {
  width: 15%;
  padding-top: 22px;
}

.icono-contratacion img {
  width: 15%;
  padding-top: 22px;
}

.icono-personal img {
  width: 15%;
  padding-top: 10px;
}

.icono-vacantes img {
  width: 15%;
  padding-top: 10px;
}

.icono-servicios img {
  width: 15%;
  padding-top: 10px;
}
    </style>


	<body style="font-family:Arial, Helvetica, sans-serif">
					<div class="w3-bar w3-black " style="margin-top: -23px;">
						<a style="text-decoration:none" href="{{ route('administrador.index') }}" class="w3-bar-item w3-button ">Inicio</a>
						<div class="w3-dropdown-hover">
							<a style="text-decoration:none" href="{{ route('reportes.index') }}" class="w3-button">Reportes</a>
						</div>
						<div class="w3-dropdown-hover">
							<a style="text-decoration:none" href="{{ route('pqrsadmin.index') }}" class="w3-button">PQRS</a>
						</div>
						<div class="w3-dropdown-hover">
							<a style="text-decoration:none" href="{{ route('calificacionesadmin.index') }}" class="w3-button">Calificaciones</a>
						</div>
						<div class="w3-dropdown-hover">
							<a style="text-decoration:none" href="{{ route('hojadevidaadmin.index') }}" class="w3-button">Hojas
								de vida</a>
						</div>
						<div class="w3-dropdown-hover">
							<a style="text-decoration:none" href="{{ route('contratacion.index') }}" class="w3-button">Contratacion</a>
						</div>
						<div class="w3-dropdown-hover">
							<a style="text-decoration:none" href="vacantesadmin.html" class="w3-button">Vacantes</a>
						</div>
						<div class="w3-dropdown-hover">
							<a style="text-decoration:none" href="inforempleado.html" class="w3-button">Personal</a>
						</div>
						<div class="w3-dropdown-hover">
							<a style="text-decoration:none" href="servicioadmin.html" class="w3-button">Servicios</a>
						</div>
					</div>


    

    <div class="texto-centro  fondo-gris">
		<div class="margen-arriba margen-abajo" style="margin: 0%">
			<h2 class="titulo-principal" style="margin-bottom: 2%;">ADMINISTRADOR {{ Auth::user()->nombre_apellido }}</h2>
			<div class="cuadro forma-cuadro">
				<div class="fondo-blanco">
					<div class="margen-texto">
						<div class="margen-cuadro"></div>
						<div>
							<img class="imagen" src="https://i.ibb.co/1KmNw1s/Reportes.png"
								style="height: 25%; width: 25%; margin-top: -20%;">
						</div>
						<h5 class="titulo">REPORTES</h5>
						<p class="texto">Reportes generados del servicio al cliente,
							contratación de servicos y contratación de Recursos humanos.</p>
						<div class="icono-reportes">
							<a href="{{ route('reportes.index') }}"><img src="https://i.ibb.co/ByPnvn7/2.png" alt="">
						</div>
						</a>
					</div>
				</div>
				<div class="fondo-blanco">
					<div class="margen-texto">
						<div class="margen-cuadro"></div>
						<img class="imagen" src="https://i.ibb.co/sQD8Sfq/Pqrs.png"
							style="height: 25%; width: 25%; margin-top: -20%;">
						<h5 class="titulo" style="margin-top: 22px;">PQRS</h5>
						<p class="texto">Peticiones, Quejas, Reclamos, Sugerencias.</p>
						<div class="icono-pqrs">
							<a href="{{ route('pqrsadmin.index') }}"><img src="https://i.ibb.co/ByPnvn7/2.png" alt="">
						</div>
						</a>
					</div>
				</div>
				<div class="fondo-blanco">
					<div class="margen-texto">
						<div class="margen-cuadro"></div>
						<img class="imagen" src="https://i.ibb.co/5W5QC9V/Calificaciones.png"
							style="height: 25%; width: 25%; margin-top: -20%;">
						<h5 class="titulo" style="margin-top: 22px;">CALIFICACIONES</h5>
						<p class="texto">Calificaciones generados por los clientes.</p>
						<div class="icono-pqrs">
							<a href="{{ route('calificacionesadmin.index') }}"><img src="https://i.ibb.co/ByPnvn7/2.png"
								alt="">
						</div>
						</a>
					</div>
				</div>
				<div class="fondo-blanco">
					<div class="margen-texto">
						<div class="margen-cuadro"></div>
						<img class="imagen" src="https://i.ibb.co/Kz5GcCQ/Contratacion.png"
							style="height: 25%; width: 25%; margin-top: -20%;">
						<h5 class="titulo">HOJAS DE VIDA Y CONTRATACIÓN</h5>
						<p class="texto">Documentación de los usuarios que se han
							registrado.</p>
						<div class="icono-contratacion">
							<a href="contratacionadmin.html"><img
								src="https://i.ibb.co/ByPnvn7/2.png" alt="">
						</div>
						</a>
					</div>
				</div>
				<div class="fondo-blanco">
					<div class="margen-texto">
						<div class="margen-cuadro"></div>
						<img class="imagen" src="https://i.ibb.co/vHF56JB/Vacantes.png"
							style="height: 25%; width: 25%; margin-top: -20%;">
						<h5 class="titulo">VACANTES</h5>
						<p class="texto">Registrar, modificar o eliminar vacantes.</p>
						<div class="icono-vacantes">
							<a href="vacantesadmin.html"><img src="https://i.ibb.co/ByPnvn7/2.png"
								alt="">
						</div>
						</a>
					</div>
				</div>
				<div class="fondo-blanco">
					<div class="margen-texto">
						<div class="margen-cuadro"></div>
						<img class="imagen" src="https://i.ibb.co/Msznpvc/Empleados.png"
							style="height: 25%; width: 25%; margin-top: -20%;">
						<h5 class="titulo" style="margin-top: 22px;">PERSONAL</h5>
						<p class="texto">Información y cargo del empleado.</p>
						<div class="icono-personal">
							<a href="inforempleado.html"><img src="https://i.ibb.co/ByPnvn7/2.png"
								alt="">
						</div>
						</a>
					</div>
				</div>
				<div class="fondo-blanco">
					<div class="margen-texto">
						<div class="margen-cuadro"></div>
						<img class="imagen" src="https://i.ibb.co/mJw10S9/Servicios.png"
							style="height: 25%; width: 25%; margin-top: -20%;">
						<h5 class="titulo">SERVICIOS</h5>
						<p class="texto">Registar, modificar o eliminar servicios.</p>
						<div class="icono-servicios ">
							<a href="servicioadmin.html"><img src="https://i.ibb.co/ByPnvn7/2.png"
								alt="">
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
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
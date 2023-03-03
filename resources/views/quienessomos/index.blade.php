@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<title>Quienes Somos</title>
<link rel="stylesheet" href="static/css/Quienes-somos.css"
	th:href="@{css/Quienes-somos.css}" media="screen">
<link rel="stylesheet" href="static/css/Encabezado-Cliente.css"
	th:href="@{css/Encabezado-Cliente.css}" media="screen">
<link rel="stylesheet" href="static/css/pie_pagina.css"
	th:href="@{css/pie_pagina.css}" media="screen">

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
.imagen-1 {
  margin-left: 30%;
  margin-top: 5%;
}
.texto-nuestro {
  font-weight: 700;
  text-align: center;
  margin-top: 4%;
}
.grupo-1 {
  width: 356px;
  min-height: 438px;
  height: auto;
  margin: 50px auto 0 170px;
  color: #111111;
  background-color: #f2f2f2;
}
.titulo-cuadro{
  font-size: 22px;
  font-weight: 700;
  margin: 18px auto 0;
  margin-left: 25%;
}
.texto-cuadro {
  margin: 20px 15px 0;
  text-align: center;
}
.grupo {
  width: 356px;
  min-height: 438px;
  height: auto;
  margin: -436px 159px 0 auto;
  color: #111111;
  background-color: #f2f2f2;
}
.u-container-layout-2 {
  padding: 30px;
}
.imagen-2 {
  width: 188px;
  height: 107px;
  margin-left: 25%;
  margin-top: 14%;
}
.margen-fotos {
  grid-template-rows: auto;
  margin: 0 0 50px;
}
.fotos {
  grid-template-columns: repeat(3, 33.3333%);
  min-height: 375px;
  grid-gap: 0px;
  
}
.imagen-3 {
 width: 65%;
 margin-left: 18%;
 margin-top: 2%;
 border-radius: 3%;
}
.u-image{
  display: block;
}
.u-sheet {
  margin: 0 auto;
}
.u-xl-mode .u-sheet {
  width: var(--theme-sheet-width-xl);
}
.fotos {
  display: grid;
  grid-template-columns: repeat(3, 33.33333333%);
}
.margen{
--theme-sheet-width-xl: 1140px;
--theme-sheet-width-lg: 940px;
--theme-sheet-width-md: 720px;
--theme-sheet-width-sm: 540px;
--theme-sheet-width-xs: 340px;

}
.imagen-10{
  height: 328px;
  width: 265px;
  margin: 0 auto 0 49px;
}
    </style>
<body style="font-family:Arial, Helvetica, sans-serif">
<div class="w3-bar w3-black" style="margin-top: -23px;">
					<a style="text-decoration: none;" href="{{ route('cliente.index') }}" class="w3-bar-item w3-button ">Inicio</a> 
					<a style="text-decoration: none;" href="{{ route('catalogoservicio.index') }}" class="w3-bar-item w3-button">Catalogo
						de servicio</a> <a style="text-decoration: none;" href="{{ route('trabajaconnosotros.index') }}" class="w3-bar-item w3-button">Trabaja
						con nosotros</a> <a style="text-decoration: none;" href="{{ route('pqrs.index') }}" class="w3-bar-item w3-button">PQRS</a>
						<a style="text-decoration: none;" href="{{ route('calificaciones.index') }}" class="w3-bar-item w3-button">Calificaciones</a>
					<a style="text-decoration: none;" href="{{ route('quienessomos.index') }}" class="w3-bar-item w3-button">Quienes
						somos</a> <a style="text-decoration: none;" href="{{ route('contactanos.index') }}" class="w3-bar-item w3-button">Contactanos</a>
				</div>
                <body class="margen u-xl-mode">
	<section>
		<div class="u-sheet">
			<img class="imagen-3 w3-card" src="https://i.ibb.co/Z2845DH/imagen.jpg">
			<h3 class="texto-nuestro"
				style="border-bottom: 2px solid black; margin-left: 40%; margin-right: 40%; padding-bottom: 1%;">¿QUIENES
				SOMOS?</h3>
			<p class="u-texto-7" style="margin-left: 5%; margin-right: 5%;">
				KONTOR COLOMBIA es la empresa especializada en ASISTENCIA que
				permite a personas, Organizaciones y Hogares ENFOCARSE en lo que
				realmente les genera valor, mientras nuestro Equipo gestiona sus
				actividades Operativas , de manera fácil, rápida y rentable.</p>
			<h3 class="texto-nuestro"
				style="border-bottom: 2px solid black; margin-left: 32%; margin-right: 32%; padding-bottom: 1%;">
				ESTAMOS AQUI PARA AYUDARTE</h3>
			<p style="margin-left: 5%; margin-right: 5%;">Analizamos las
				necesidades de tu empresa y/o hogar, te ofrecemos la solución y
				servicio adecuado adaptado a tus requerimientos.</p>
			<span class="w3-tag w3-padding w3-round-large w3-red w3-center"
				style="margin-left: 35%;"> No olvides seleccionar tu servicio
				ideal<br> !!AQUI ABAJO¡¡<br>
			</span>
		</div>
	</section>
	<section class="u-section-2">
		<div class="u-sheet">
			<h3 class="texto-nuestro"
				style="border-bottom: 2px solid black; margin-left: 40%; margin-right: 40%; padding-bottom: 1%;">Nuestros
				servicios</h3>
			<div class="grupo-1">
				<div>
					<img class="imagen-1" src="https://i.ibb.co/0XGH69s/cata.png">
					<h5 class="titulo-cuadro">Asistente en casa</h5>
					<h6 class="texto-cuadro">Si seleccionas este boton te dirigiras a consultar un 
						servicio de asistente en el hogar, en este podras ver costos, beneficios y tipos de servicios.</h6>
					<a href="{{ route('catalogoservicio.index') }}">
						<button class="w3-button w3-blue"
							style="margin-top: 5%; border-radius: 3vh; margin-left: 25%;">Solicita
							tu servicio</button>
					</a>
				</div>
			</div>
			<div class="grupo">
				<div>
					<img class="imagen-2" src="https://i.ibb.co/H2rL2dz/Trabajaconnosotros.png">
					<h5 class="titulo-cuadro">Asistent​e virtual</h5>
					<h6 class="texto-cuadro">Este servicio abarca el soporte de atencion al cliente, colaborando 
						y realizando las tareas que se estipulan en el contrato.</h6>
					<a href="{{ route('contactanos.index') }}">
						<button class="w3-button w3-blue"
							style="margin-top: 11%; border-radius: 3vh; margin-left: 33%;">Contactanos</button>
					</a>
				</div>
			</div>
			<h3 class="texto-nuestro"
				style="border-bottom: 2px solid black; padding-bottom: 2%;">
				Nuestro equipo</h3>
			<div class="margen-fotos">
				<div class="fotos">
					<div>
						<div>
							<img alt="" class="imagen-10 w3-card w3-hover-grayscale "
								src="https://i.ibb.co/b2sqdMW/Ramirez.jpg">
							<h3 class="nombre" style="margin-left: 15%;">Brayan Stiven
								Ramirez</h3>
							<p class="analista" style="margin-left: 20%; font-weight: bold;">Analista
								de operaciones</p>
						</div>
					</div>
					<div>
						<div>
							<img alt="" class="imagen-10 w3-card w3-hover-grayscale"
								src="https://i.ibb.co/Bcm45pM/Parra.jpg">
							<h3 class="nombre" style="margin-left: 22%;">Brayan David
								Parra</h3>
							<p class="analista" style="margin-left: 22%; font-weight: bold;">Analista
								de operaciones</p>
						</div>
					</div>
				</div>
			</div>
		</div>
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
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
<title>Contactenos</title>
<link rel="stylesheet" href="static/css/pie_pagina.css"
	th:href="@{css/pie_pagina.css}">
<link rel="stylesheet" href="static/css/Encabezado-Cliente.css"
	th:href="@{css/Encabezado-Cliente.css}">
<link rel="stylesheet" href="static/css/Contactanos.css"
	th:href="@{css/Contactanos.css}">

  <script src="
	//cdn.jsdelivr.net/npm/sweetalert2@11">
</script>
<script src="js/Contactano.js"></script>
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
.tamaño-body {
  min-height: 120vh;
}
.imagen-1 {
  width: 800px;
  height: 569px;
  margin-left: 520px;
  border-radius: 50px;
}
.contenido{
  height: 498px;
  margin: -540px 38px 0 532px;
}
.titulos {
  font-weight: 700;
  font-size: 2.25rem;
  margin: -473px auto 0 71px;
}
.subtitulos {
  font-weight: 700;
  margin: 38px auto 0 38px;
}
.textos {
  margin: 11px auto 0 49px;
}
.fondo-boton {
  padding: 10px 30px;
  background-color: #478ac9;
  color: #ffffff;
  margin: 10px;
}
.tamaño-cuadro {
  display: block;
  width: 100%;
  padding: 10px 12px;
}
.cuadro {
  display: flex;
  flex-wrap: wrap;
}
.posicion-cuadro {
  margin-bottom: 10px;
  padding-left: 10px;
  width: 100%;
}
.correo {
  width: 50%;
}
    </style>

<body style="font-family: Arial, Helvetica, sans-serif">
<div class="w3-bar w3-black" style="margin-top: -23px;">
					<a style="text-decoration: none;" href="{{ route('cliente.index') }}" class="w3-bar-item w3-button ">Inicio</a> 
					<a style="text-decoration: none;" href="{{ route('catalogoservicio.index') }}" class="w3-bar-item w3-button">Catalogo
						de servicio</a> <a style="text-decoration: none;" href="{{ route('trabajaconnosotros.index') }}" class="w3-bar-item w3-button">Trabaja
						con nosotros</a> <a style="text-decoration: none;" href="{{ route('pqrs.index') }}" class="w3-bar-item w3-button">PQRS</a>
						<a style="text-decoration: none;" href="{{ route('calificaciones.index') }}" class="w3-bar-item w3-button">Calificaciones</a>
					<a style="text-decoration: none;" href="{{ route('quienessomos.index') }}" class="w3-bar-item w3-button">Quienes
						somos</a> <a style="text-decoration: none;" href="{{ route('contactanos.index') }}" class="w3-bar-item w3-button">Contactanos</a>
				</div>
                <section>
		<div class="tamaño-body">
			<div>
				<img class="imagen-1" style="margin-top: 50px;"
					src="https://i.ibb.co/TWL0G0C/Asistente-virtual.jpg">
			</div>
			<div class="contenido">
				<form>
					<div class="cuadro" style="padding: 10px;">
						<div class="posicion-cuadro correo">
							<label>Nombre completo</label> <input
								placeholder="Introduzca su nombre" id='nombre'
								class="u-border-white tamaño-cuadro" required>
						</div>
						<div class="posicion-cuadro correo">
							<label>Correo electrónico</label> <input
								placeholder="Introduzca una dirección de correo electrónico válida"
								id='email' class="u-border-white tamaño-cuadro" required>
						</div>
						<div class="posicion-cuadro">
							<label>Número de Telefono</label> <input
								placeholder="Ingrese su teléfono (ejemplo, +57 3201956282)"
								id='telefono' class="u-border-white tamaño-cuadro" required>
						</div>
						<div class="posicion-cuadro">
							<label>Asunto</label> <input
								placeholder="Introduzca el titulo del asunto" id='asunto'
								class="u-border-white tamaño-cuadro" required>
						</div>
						<div class="posicion-cuadro">
							<label>Mensaje</label>
							<textarea placeholder="Ingrese su mensaje" id='mensaje' rows="4"
								class="u-border-white tamaño-cuadro" required></textarea>
						</div>
						<button class="btn btn-primary"
							style="margin-top: 8px; margin-bottom: 3%;" id="submit"
							onclick="validate()">Enviar</button>
					</div>
			</div>
			<h3 class="titulos">Contáctanos</h3>
			<h3 class="subtitulos">¿Dónde estamos?</h3>
			<p class="textos">Bogotá, Colombia</p>
			<div class=""
				style="margin-left: 49px; margin-right: 300px; border-style: solid; border-bottom-width: 0; color: lightgray">
			</div>
			<h3 class="subtitulos">Llámanos</h3>
			<a style="text-decoration:none;" href="tel:+57 (313)5519978">
				<p class="textos">+57 (313)5519978</p>
			</a>
			<div class=""
				style="margin-left: 49px; margin-right: 300px; border-style: solid; border-bottom-width: 0; color: lightgray">
			</div>
			<h3 class="subtitulos">O escríbenos</h3>
			<a style="text-decoration:none;" href="mailto:info@kontorcolombia.co">
				<p class="textos">info@kontorcolombia.co</p>
			</a>
			<div class=""
				style="margin-left: 49px; margin-right: 300px; border-style: solid; border-bottom-width: 0; color: lightgray;">
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
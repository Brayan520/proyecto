@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>

<head>
<title>servicios</title>
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
<link rel="stylesheet" href="static/css/CatalogoServicios.css"
	th:href="@{css/CatalogoServicios.css}">
<link rel="stylesheet" href="static/css/Encabezado-Cliente.css"
	th:href="@{css/Encabezado-Cliente.css}">


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
.forma-cuadro {
    grid-template-columns: repeat(2, calc(33.3333% - 20px));
    grid-gap: 30px;
    margin-left: 250px;
    width: 100%;
}
.margen-abajo {
    min-height: 864px;

}
.titulo-principal {
    font-size: 40px;
    font-weight: bold;
}  
.margen-texto {
    padding: 10px;
}
.margen-cuadro{
    height: 50px;
    width: 50px;
}
.cuadro {
  display: grid;
}
.fondo-blanco{
  color: #111111;
  background-color: #ffffff;
}
.fondo-gris{
  color: #111111;
  background-color: #f2f2f2;
}
body {
    margin: 0%;
}
.titulo{
    text-align: center;
    margin-top: 10%;
}
.texto-centro {
    text-align: center;
    color: #111111;
    background-color: #f2f2f2;
}
.refe{
    height: 200px;

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


	<div class="texto-centro  fondo-gris" style="padding-top: 3%; padding-bottom:10%;">
		<div class="margen-arriba margen-abajo" style="margin: 1%;">
			<h4 class="titulo-principal" style="margin-bottom: 2%;">SELECCIONA
				TU SERVICIO</h4>
			<div class="cuadro forma-cuadro">

				<div class="fondo-blanco"
					style="border-radius: 10px; margin-top: 0%;">
					<div class="margen-texto">
						<div class="margen-cuadro"></div>
						<img class="imagen" src="https://i.ibb.co/2j2TDNm/Asesoria-La.png"
							style="height: 30%; width: 30%; margin-top: -5%; margin-left: 2%; margin-bottom: -18%; padding-bottom: -10%;">
						<h5 class="titulo" style="margin-top: 40px;">SERVICIOS DE
							LIMPIEZA Y MANTENIMIENTO</h5>
						<a href="">
							<button class="w3-button w3-blue" style="border-radius: 8px;">Me
								interesa</button>
						</a>
					</div>
				</div>
				<div class="fondo-blanco"
					style="border-radius: 10px; margin-top: 0%;">
					<div class="margen-texto">
						<div class="margen-cuadro"></div>
						<img class="imagen" src="https://i.ibb.co/7JK0N5t/Seguridad-Social.png" 
							style="height: 24%; width: 24%; margin-top: -5%; margin-left: 2%; margin-bottom: 0%; padding-bottom: -10%;">
						<h5 class="titulo">ASESORIA LABORAL</h5>
						<a href="asesorialaboral.html">
							<button class="w3-button w3-blue" style="border-radius: 8px;">Dirigirme</button>
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
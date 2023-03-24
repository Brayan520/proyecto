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
.rectangulo {
  min-height: 130px;
  color: #ffffff;
  background-color: #478ac9;
}
.centrar-texto {
  padding: 30px;
}
.texto-vacante {
  font-size: 40px;
  width: 464px;
  font-weight: 700;
  margin: auto;
}
.margenes-cuadros {
  width: 1168px;
  margin: auto;
}
.cuadrar-cuadros {
  grid-template-columns: 33.3333% 33.3333% 33.3333%;
  min-height: 928px;
  display: grid;
}
.bajar-cuadro {
  padding: 20px 0;
}
.forma-imagen {
  height: 213px;
  width: 357px;
}
.cuadrar-subtitulo {
  margin: 21px -18px 0 11px;
}
.cuadrar-texto {
  margin: 19px 30px 0;
}
.letra-azul {
  border-style: none none solid;
  margin: 21px auto 0 30px;
}
.linea-azul {
  color: #478ac9 !important;
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
	</style>


<div class="w3-bar w3-black" style="margin-top: -23px;">
					<a style="text-decoration: none;" href="{{ route('cliente.index') }}" class="w3-bar-item w3-button ">Inicio</a> 
					<a style="text-decoration: none;" href="{{ route('catalogoservicio.index') }}" class="w3-bar-item w3-button">Catalogo
						de servicio</a> <a style="text-decoration: none;" href="/shop" class="w3-bar-item w3-button">Trabaja
						con nosotros</a> <a style="text-decoration: none;" href="{{ route('pqrs.index') }}" class="w3-bar-item w3-button">PQRS</a>
						<a style="text-decoration: none;" href="{{ route('calificaciones.index') }}" class="w3-bar-item w3-button">Calificaciones</a>
					<a style="text-decoration: none;" href="{{ route('quienessomos.index') }}" class="w3-bar-item w3-button">Quienes
						somos</a> <a style="text-decoration: none;" href="{{ route('contactanos.index') }}" class="w3-bar-item w3-button">Contactanos</a>
				</div>


				<body>
	<section>
		<div class="rectangulo">
			<div class="centrar-texto">
				<h2 class="texto-vacante">Vacantes disponibles</h2>
			</div>
		</div>
		<div class="margenes-cuadros">
			<div class="cuadrar-cuadros">
				<div>
					<div class="bajar-cuadro">
						<img alt="" class="forma-imagen" src="https://i.ibb.co/hD0RxXQ/IStock-906777508.jpg">
						<h3 class="cuadrar-subtitulo">Limpieza y Mantenimiento</h3>
						<p class="cuadrar-texto">Postulate como operario de aseo y
							mantenimiento.</p>
						<a style="text-decoration: none;" href="{{ route('vacantelimpieza.index') }}" class="linea-azul letra-azul">Más
							información</a>
					</div>
				</div>
				<div>
					<div class="bajar-cuadro">
						<img alt="" class="forma-imagen"
							src="https://i.ibb.co/1mtW7Z9/Para-que-sirve-el-marketing-digital.jpg">
						<h3 class="cuadrar-subtitulo">Marketing Digital</h3>
						<p class="cuadrar-texto">Si te gusta la publicidad, esta es tu
							oportunidad, postulate ya.</p>
						<a style="text-decoration: none;" href="trabajaconnosotros.html" class="linea-azul letra-azul">Más
							información</a>
					</div>
				</div>
				<div>
					<div class="bajar-cuadro">
						<img class="forma-imagen"
							src="https://i.ibb.co/bQHSbK3/Como-se-selecciona-un-gerente-y-los-puestos-de-liderazgo-en-general-20133-350x230.jpg">
						<h3 class="cuadrar-subtitulo">Auxiliar de R.R.H.H.</h3>
						<p class="cuadrar-texto">Si eres auxiliar de recursos humanos,
							esta es tu oportunidad.</p>
						<a style="text-decoration: none;" href="trabajaconnosotros.html" class="linea-azul letra-azul">Más
							información</a>
					</div>
				</div>
				<div>
					<div class="bajar-cuadro">
						<img alt="" class="forma-imagen"
							src="https://i.ibb.co/gVXrMWR/Nomina-prestaciones-sociales-2.jpg">
						<h3 class="cuadrar-subtitulo">Auxiliar de Nómina</h3>
						<p class="cuadrar-texto">Si eres auxiliar de nómina, esta es
							tu oportunidad.</p>
						<a style="text-decoration: none;" href="trabajaconnosotros.html" class="linea-azul letra-azul">Más
							información</a>
					</div>
				</div>
			</div>
		</div>
	</section>
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
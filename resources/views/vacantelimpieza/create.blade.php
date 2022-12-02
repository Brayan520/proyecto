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
  width: 100%;
  padding: 10px;
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
.pagina{        
--theme-sheet-width-xl: 1140px;
line-height: 1.6;
}
h2
{
font-size: 2.25rem;
}
/*Aqui se configura la parte de los botones*/
.u-btn{
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
						de servicio</a> <a style="text-decoration: none;" href="{{ route('trabajaconnosotros.index') }}" class="w3-bar-item w3-button">Trabaja
						con nosotros</a> <a style="text-decoration: none;" href="{{ route('pqrs.index') }}" class="w3-bar-item w3-button">PQRS</a>
						<a style="text-decoration: none;" href="{{ route('calificaciones.index') }}" class="w3-bar-item w3-button">Calificaciones</a>
					<a style="text-decoration: none;" href="{{ route('quienessomos.index') }}" class="w3-bar-item w3-button">Quienes
						somos</a> <a style="text-decoration: none;" href="{{ route('contactanos.index') }}" class="w3-bar-item w3-button">Contactanos</a>
				</div>


<body class="pagina titulo">
	<section class="fondo">
		<div class=" margen">
			<br>
			<h2 style="font-weight: bold;">Ficha Postulante - Hoja de vida</h2>
			<hr>
			<div class="abajo forma">
			<h2 style="font-weight: bold;">Postulación</h2>
			<form action="{{ route('vacantelimpieza.store') }}" method="POST">
				<hr>
				<label>Postulación</label>
					<div>
						<select class="cuadros" id="documento" required readonly>
							<option value="">Auxiliar de limpieza y mantenimiento</option>
						</select>
					</div>
				<hr>
				<div>
					<h1 style="font-weight: bold;">Datos personales</h1>
				</div>
				<hr>
					<div>
						<label>Nombre</label> <input type="text"
							placeholder="Introduzca su nombre" class="cuadros"
							id="nombre" required>
					</div>
					<hr>
					<div>
						<label>Apellido</label> <input type="text"
							placeholder="Introduzca su apellido" class="cuadros"
							id="nombre" required>
					</div>
					<hr>
					<div>
						<label>Fecha nacimiento</label> <input type="date"
							placeholder="MM/DD/YYYY" class="cuadros" id="nacimiento" required>
					</div>
					<hr>
					<div>
						<label>Edad</label> <input type="number"
							placeholder="Introduzca su Edad" class="cuadros" id="edad"
							required>
					</div>
					<hr>
					<label>Tipo de Documento</label>
					<div>
						<select class="cuadros" id="documento" required>
							<option value="">Seleccionar</option>
							<option value="Item 1">Cedula Ciudadania</option>
							<option value="Item 2">Nit</option>
							<option value="Item 3">Cedula Extranjeria</option>
						</select>
					</div>
					<hr>
					<div>
						<label>Numero de identificacion</label> <input type="num"
							id="identificacion"
							placeholder="Introduzca una dirección de correo electrónico válida"
							class="cuadros" required>
					</div>
					<hr>
					<div>
						<label>Correo electronico</label> <input type="email" id="email"
							placeholder="Introduzca una dirección de correo electrónico válida"
							class="cuadros" required>
					</div>
					<hr>
					<div>
						<label>Número de Teléfono principal</label> <input type="tel"
							id="telefono"
							placeholder="Ingrese su teléfono principal (por ejemplo, +573201945682)"
							class="cuadros" required>
					</div>
					<hr>
					<div>
						<label>Número de Teléfono secundario</label> <input type="tel"
							id="telefono1"
							placeholder="Ingrese su teléfono secundario (por ejemplo, +14155552675)"
							class="cuadros">
					</div>
					<hr>
					<div>
						<label>Dirección de Domicilio</label> <input type="text"
							placeholder="Ingrese su Dirección de Domicilio" id="direccion"
							class="cuadros" required>
					</div>
					<hr>
					<div>
						<label>Estado Civil</label>
						<div>
							<select class="cuadros" id="estadocivil" required>
								<option value="">Seleccionar</option>
								<option value="Item 1">Soltero</option>
								<option value="Item 2">Casado</option>
								<option value="Item 3">Viudo</option>
							</select>
						</div>
					</div>
					<hr>
					<div>
						<h1 style="font-weight: bold;">Estudios</h1>
						<hr>
						<label>Bachillerato</label>
						<div>
							<select class="cuadros" id="estudios" required>
								<option value="">Seleccionar</option>
								<option value="Item 1">Completo (Grado 11)</option>
								<option value="Item 2">Incompleto (Grado 6-9)</option>
								<option value="Item 3">Primaria (Grado 5)</option>
							</select>
							<hr>
							<div>
								<h1 style="font-weight: bold;">Otros Estudios</h1>
								<input type="checkbox"> <label>Tecnico</a>
								</label>
							</div>
							<div>
								<input type="checkbox"> <label>Tecnologo</a>
								</label>
							</div>
							<div>
								<input type="checkbox"> <label>Universitario</a>
								</label>
							</div>
							<div>
								<input type="checkbox"> <label>Cursos</a>
								</label>
							</div>
							<hr>
							<div>
								<label>Detallar Carrera</label> <input type="text"
									placeholder="Nombre de la Carrera" class="cuadros">
							</div>
							<hr>
							<div>
								<label>Competencias</label> <input type="text"
									placeholder="Introduzca sus competencias"
									class="cuadros">
							</div>
							<hr>
							<div>
								<label>Institución</label> <input type="text"
									placeholder="Introduzca el nombre de la Institución"
									class="cuadros">
							</div>
							<hr>
							<div>
								<label>Estado</label>
								<div>
									<select class="cuadros">
										<option value="">Seleccionar</option>
										<option value="Item 1">Completo</option>
										<option value="Item 2">Incompleto</option>
										<option value="Item 3">En curso</option>
									</select>
								</div>
							</div>
							<hr>
						</div>
						<h1 style="font-weight: bold;">Experiencia Laboral</h1>
						<hr>
						<div>
							<label>Empresa</label> <input type="text"
								placeholder="Introduzca el nombre de la Empresa" class="cuadros">
						</div>
						<hr>
						<div>
							<label>Nombre del Cargo</label> <input type="text"
								placeholder="Introduzca el nombre del cargo que desempeño"
								class="cuadros">
						</div>
						<hr>
						<div>
							<label>Experiencia Laboral</label> <input type="text"
								placeholder="Introduzca su experiencia laboral en la empresa" class="cuadros">
						</div>
						<hr>
						<div>
							<label>Fecha de ingreso</label> <input type="date"
								placeholder="MM/DD/YYYY" class="cuadros">
						</div>
						<hr>
						<div>
							<label>Fecha de salida</label> <input type="date"
								placeholder="MM/DD/YYYY" class="cuadros">
						</div>
						<hr>
					</div>
					<div>
						<h1 style="font-weight: bold;">Referencias</h1>
						<div>
						<hr>
							<label>Referencia Personal</label> <input type="text"
								placeholder="Introduzca su referencia personal" class="cuadros">
						</div>
						<hr>
						<div>
							<label>Experiencia Laboral</label> <input type="text"
								placeholder="Introduzca su referencia laboral" class="cuadros">
						</div>
			</div>
			<hr>
</div>
			<div style="margin-left: 25%; margin-top: -40px;">
				<input type="checkbox" required> <label>Acepto el
					tratamiento y protección de datos.</a>
				</label>
			</div>

			<input type="submit" class="btn btn-primary u-btn"
				style="margin-left: 290px; padding: 10px; padding-left: 6px; padding-left: 5%; padding-right: 4%; border: none; margin-top: 8px; margin-bottom: 3%; cursor: pointer;"
				id="submit">
			</form>
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
@endsection 
</html>
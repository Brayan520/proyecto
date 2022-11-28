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
<link rel="stylesheet" href="static/css/Encabezado-Cliente.css"
	th:href="@{css/Encabezado-Cliente.css}">
</head>

<body>
	<div>
		<div class="w3-container encabezado" target="encabezdoAdmi">
			<div class="row">
				<div class="w3-col m4">
					<a href="cliente.html"> <img
						class="w3-squared w3-imagen logo" src="img/QSOFT.png">
					</a>
				</div>
				<div class="w3-col m8 w3-center">
					<h1 class="w3-text-black nproyecto">QUATTRO SOFT</h1>
				</div>
				<div class="w3-bar w3-black ">
					<a href="cliente.html" class="w3-bar-item w3-button ">Inicio</a> <a
						href="catalogoservicios.html" class="w3-bar-item w3-button">Catalogo de
						servicio</a> <a href="vacantecliente.html"
						class="w3-bar-item w3-button">Trabaja con nosotros</a> <a
						href="pqrs.html" class="w3-bar-item w3-button">PQRS</a> <a
						href="crearcalificaciones.html" class="w3-bar-item w3-button">Calificaciones</a>
					<a href="quienessomos.html" class="w3-bar-item w3-button">Quienes
						somos</a> <a href="contactanos.html" class="w3-bar-item w3-button">Contactanos</a>
					<div class="w3-dropdown-hover w3-right">
						<button class="w3-button w3-yellow">Perfil</button>
						<div class="w3-dropdown-content w3-bar-block w3-border"
							style="right: 0">
							<a href="error404.html" class="w3-bar-item w3-button">Actualizar
								datos</a> <a href="olvidocontraseña.html" class="w3-bar-item w3-button">Cambiar
								contraseña</a> <a href="index.html"
								class="w3-bar-item w3-button">Cerrar sesion</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
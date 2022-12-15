@extends('layouts.app')
@section('content')
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible">
<title>Hometor</title>
<link rel="shortcut icon" href="img/ilustración 1.png"
	type="image/x-icon">
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
<link rel="stylesheet" href="static/css/Encebezado-Servicios.css"
	th:href="@{css/Encebezado-Servicios.css}">
<link rel="stylesheet" href="static/css/pie_pagina.css"
	th:href="@{css/pie_pagina.css}">
<link rel="stylesheet" href="static/css/estilos.css"
	th:href="@{css/estilos.css}">
</head>

<style>
    .imagen{
    width: 100%;
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

<body>
<div class="w3-bar w3-black" style="margin-top: -23px;">
<a style="text-decoration: none;" href="{{ route('cliente.index') }}" class="w3-bar-item w3-button ">INICIO</a> 
					<a style="text-decoration: none;" href="{{ route('catalogoservicio.index') }}" class="w3-bar-item w3-button">CONTACTANOS</a>
					 <a style="text-decoration: none;" href="{{ route('trabajaconnosotros.index') }}" class="w3-bar-item w3-button">¿QUIENES SOMOS?</a>
				</div>
                <div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
    <div class="carousel-item active">
        <img class="imagen" src="https://i.ibb.co/WsHnfbR/Aseo1.jpg" alt="Los Angeles">
        <div class="carousel-caption">
            <h3 style="font-weight: bold; font-size: 60px;">Si no tienes
                tiempo para limpiar, contactanos ahora y tendras el mejor ambiente
                en minutos</h3>
            <a href="contactanosservicios.html"><button
                    class="w3-blue w3-hover-white"
                    style="margin-bottom: 27%; border-style: none; border-radius: 5px; padding: 10px;">CONTACTANOS
                    AHORA</button></a>
        </div>
    </div>
    <div class="carousel-item">
        <img class="imagen" src="https://i.ibb.co/s20KY8J/Aseo2.jpg" alt="Chicago">
        <div class="carousel-caption">
            <h3 style="font-weight: bold; font-size: 60px; margin-bottom: 35%;">Mas
                que un asunto de limpieza, nuestro servicio te ofrece una
                experiencia de bienestar</h3>
        </div>
    </div>
    <div class="carousel-item">
        <img class="imagen" src="https://i.ibb.co/f2yLxwy/Aseo3.jpg" alt="New York">
        <div class="carousel-caption">
            <h3 style="font-weight: bold; font-size: 60px; margin-bottom: 28%;">Cuando
                de la limpieza se trata nada nos detiene. Nuestro equipo es
                especialista en adecuar tus espacios</h3>
        </div>
    </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev"> <span
    class="carousel-control-prev-icon"></span>
</a> <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
</a>

</div>
<div class="row" style="margin-top: 5%; margin-bottom: 5%;">
<div class="col-md-2"></div>
<div class="col-md-4 w3-center">
    <i style="font-weight: bold; font-size: 30px;">El mejor servicio
        de</i>
    <h1 style="font-style: italic; color: rgb(67, 132, 218);">limpieza</h1>
    <h5 style="margin-top: 20px;">No te preocupes mas por querer
        tener un espacio adecuado y no contar con el tiempo para hacerlo,
        con HOMETOR todos tus problemas se solucionan de ahora en adelante,
        disfrutar la vida mientras nosotros organizamos tu casa.</h5>
    <a href="iniciarsesion.html"><button class="w3-hover-opacity"
            style="border-style: none; background-color: rgb(67, 132, 218); padding: 1%; border-radius: 5px; color: white; margin-top: 5%;">Descubre
            más</button></a>
</div>
<div class="col-md-4">
    <img style="height: 100%; width: 100%;"
        src="https://i.ibb.co/jGCdkx8/Imagen1-servicios.jpg"  alt="">
</div>
<div class="col-md-2"></div>
</div>
<h3 class="w3-center w3-light-grey"
style="font-weight: bold; margin-bottom: 0%;">NUESTROS SERVICIOS</h3>
<div class="row w3-light-grey">
<div class="col-md-2"></div>
<div class="col-md-4">
    <img class="w3-circle" src="https://i.ibb.co/nsBgqZq/Asistente-h.png"
        style="height: 80%; width: 80%;" alt=""> <a
        href="asistentehogar.html"><BUTton
            style="border-radius: 5px; border-style: none; background-color: white; margin-left: 17%; margin-top: 3%; font-size: 20px;">Asistente
            en el hogar</BUTton></a>
</div>
<div class="col-md-4">
    <img class="w3-circle" src="https://i.ibb.co/drjT5Xx/Asistente-v.jpg"
        style="height: 80%; width: 80%; margin-left: 15%;" alt=""> <a
        href="asistentevirtual.html"><BUTton
            style="border-radius: 5px; border-style: none; background-color: white; margin-left: 38%; margin-top: 3%; font-size: 20px;">Asistente
            virtual</BUTton></a>
</div>
</div>
<div class="row" style="margin-top: 5%; margin-bottom: 5%;">
<div class="col-md 6">
    <img src="https://i.ibb.co/NVD2gLX/Atomi.webp"  style="height: 100%; width: 100%;" alt="">
</div>
<div class="col-md 6"
    style="margin-left: 7%; margin-right: 7%; margin-top: 7%;">
    <i style="font-weight: bold; font-size: 30px; margin-bottom: 10%;">Manten
        tu tiempo y dinero Seguros</i>
    <p>Hometor es un proyecto para ofrecer servicios de limpieza a la
        medida haciendo frente a las cosas que ocupan su valioso tiempo.
        Nuestra misión es proporcionar a todos los clientes la mejor calidad
        de servicios de limpieza y reparación para solicitudes residenciales
        y comerciales.</p>
    <a href="contactanosservicios.html"><button
            class="w3-blue w3-hover-white"
            style="margin-bottom: 27%; border-style: none; border-radius: 5px; padding: 6px;">CONTACTANOS
            AHORA</button></a>
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
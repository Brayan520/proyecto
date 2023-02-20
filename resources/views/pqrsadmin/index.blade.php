@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PQRS-Administrador</title>
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
	integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
	crossorigin="anonymous">
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
<link rel="stylesheet" href="static/css/pqrs-admin.css"
	th:href="@{css/pqrs-admin.css}">
<link rel="stylesheet" href="static/css/Encabezado-Administrador.css"
	th:href="@{css/Encabezado-Administrador.css}">
<link rel="stylesheet" href="static/css/pie_pagina.css"
	th:href="@{css/pie_pagina.css}">
</head>


<style>
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
.u-sheet {
  margin: auto;
}
.cuadro-1 .u-sheet {
  width: var(--theme-sheet-width-xl);
}
table {
  width: 100%;
  border-collapse: collapse;
}
.columna th{
  padding: 10px;
}
.linea{
  border-style: solid;
}
.borde-cuadro{
  border-width: 1px;
}
.color{
  color: #ffffff;
  background-color: grey;
}
.cuadro{
--theme-sheet-width-xl: 1140px;
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
						<a style="text-decoration:none" href="calificacionesadmin.html" class="w3-button">Calificaciones</a>
					</div>
					<div class="w3-dropdown-hover">
						<a style="text-decoration:none" th:href="@{/hojadevidaadmin}" class="w3-button">Hojas
							de vida</a>
					</div>
					<div class="w3-dropdown-hover">
						<a style="text-decoration:none" href="contratacionadmin.html" class="w3-button">Contratacion</a>
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

<div class="container">
	<div class="row">
		<div class="col-md-12">
		</div>
		<br>
		<div class="col-md-12">
			<h2 class="text-success">Reportes Pqrs</h2>
		</div>
		@if (sizeof($pqrs) > 0)
	
			<table class="table table-bordered" id="tblData">
</div>
			<thead class="w3-grey w3-center">
				<tr style="height: 28px;">
					<th class="borde w3-center">#</th>
					<th class="borde w3-center" style="width:25%">Descripcion</th>
					<th class="borde w3-center" style="width:25%">Fecha</th>
					<th class="borde w3-center" style="width:25%">Tipo</th>
                    <th class="borde w3-center" style="width:25%">Estado</th>
					<th class="borde w3-center" style="width:25%">Direccion</th>
					<th class="borde w3-center" style="width:25%">Respuesta</th>
					<th class="text-center" style="width:25%">Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pqrs as $pqr)
				<tr style="height: 76px;">
				<td class="linea w3-center" style="background-color: lightgray;"	>{{ $pqr->idpqrs }}</td>
					<td class="linea w3-center" style="font-weight: bold;">{{ $pqr->descripcion }}</td>
					<td class="linea w3-center">{{ $pqr->fecha }}</td>
					<td class="linea w3-center">{{ $pqr->tipopqrss->tipo }}</td>
					<td class="linea w3-center" style="font-weight: bold;">{{ $pqr->estados->tipo }}</td>
					<td class="linea w3-center">{{ $pqr->contratoservicios->direccion }}</td>
					<td class="linea w3-center" style="font-weight: bold;">{{ $pqr->idrespuesta }}</td>
					<td class="text-center">
						<a href="{{ route('respuesta.create') }}" class="btn btn-info" style="margin-right: 200px; margin-left: 100px;">Respuesta</a>
						<a href="{{ route('pqrsadmin.edit', $pqr) }}" class="btn btn-info" style="background-color:blue; margin-top: -82px; margin-left: 200px; margin-right: 100px; margin-top: -60px">Estado</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="d-flex justify-content-center">
			
		</div>
		@else
		<div class="alert alert-secondary"><h3>No se encontraron Pqrs</h3></div>
		@endif
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

<script type="text/javascript">

    function exportTableToExcel(tableID, filename = '') {
      var downloadLink;
      var dataType = 'application/vnd.ms-excel';
      var tableSelect = document.getElementById(tableID);
      var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

      // Specify file name
      filename = filename ? filename + '.xls' : 'PQRS_Clientes.xls';

      // Create download link element
      downloadLink = document.createElement("a");

      document.body.appendChild(downloadLink);

      if (navigator.msSaveOrOpenBlob) {
        var blob = new Blob(['ufeff', tableHTML], {
          type: dataType
        });
        navigator.msSaveOrOpenBlob(blob, filename);
      } else {
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

        // Setting the file name
        downloadLink.download = filename;

        //triggering the function
        downloadLink.click();

      }
    }
  </script>

@endsection
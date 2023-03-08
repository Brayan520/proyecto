@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contratación-Administrador</title>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.5/css/buttons.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>


	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
			<a style="text-decoration:none" href="{{ route('calificaciones.index') }}" class="w3-button">Calificaciones</a>
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

	<br>
<center>
    
    <hr style="background:#111111">
	<div class="container">
		<div class="row">
            <h2 style="font-weight:bold">Editar contratante:</h2>
            <hr>

            <form action="{{ route('contratacion.update', $contratacion)}}" method="POST">
				@csrf
				@method('PUT')
            

				<div class="col-md-6">
					<label for="terminolaboral" class="form-control-label">Termino Laboral</label>
					<input type="text" class="form-control" id="terminolaboral" name="terminolaboral" value="{{old('terminolaboral', $contratacion->terminolaboral)}}">
				
				@error('terminolaboral')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
					<label for="fechainicial" class="form-control-label">Fecha Inicial</label>
					<input type="date" class="form-control" id="fechainicial" name="fechainicial" value="{{old('fechainicial', $contratacion->fechainicial)}}">
				
				@error('fechainicial')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>

				<div class="col-md-6">
<label for="fechafinal" class="form-control-label">Fecha Final</label>
					<input type="date" class="form-control" id="fechafinal" name="fechafinal" value="{{old('fechafinal', $contratacion->fechafinal)}}">
				
				@error('fechafinal')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>
				<div class="col-md-6">
<label for="sueldo" class="form-control-label">Sueldo</label>
					<input type="text" class="form-control" id="sueldo" name="sueldo" value="{{old('sueldo', $contratacion->sueldo)}}">
				
				@error('sueldo')
				<small class="text-danger"> {{ $message}}</small>
				@enderror
				</div>
            <div class="col-md-6">
					
					<label for="idcolaborador" class="form-label">Id Colaborador</label>
					<input type="text" class="form-control" id="idcolaborador" name="idcolaborador" value="{{ $contratacion->idcolaborador}}" readonly>
					@error('idcolaborador')
					<small class="text-danger" role="alert">
						selecciona un colaborador
					</small>
					@enderror
				</div>
            
                <div class="col-md-6">
					<label for="idaspirante" class="form-label">Aspirante</label>
                    @foreach($aspirantes as $aspirante)
					<input type="text" class="form-control" id="idaspirante" name="idaspirante" value="{{ $aspirante->idaspirante }}" readonly></input>
                    @endforeach
				
					@error('idaspirante')
					<small class="text-danger" role="alert">
						selecciona un aspirante
					</small>
					@enderror
				</div>
                <br>
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary">Actualizar</button>
	</div>
</div>
    </div>
<br><br><br><br><br>
</center>
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
</body>

@endsection
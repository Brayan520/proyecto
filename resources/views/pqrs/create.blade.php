@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<link rel="stylesheet" href="static/css/Formulario-Queja.css"
	th:href="@{css/Formulario-Queja.css}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="js/Formulario-PQRS.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
	</style>
	<body style="font-family:Arial, Helvetica, sans-serif">
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<a href="{{ route('pqrs.index') }}" class="btn btn-primary ti-back-left" style="width: 5%;"></a>
			</div>
		</div>
		<div class="col-md-12">
		<form action="{{ route('pqrs.store') }}" method="POST">
			@csrf

            <div class="col-md-6">
				<label for="fecha" class="form-label">Fecha de la pqrs</label>
				<input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha') }}" readonly>
				@error('fecha')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>

            <div class="col-md-6">
				<label for="idtipopqrs" class="form-label">Tipo de pqrs</label>
				<select class="form-control" id='idtipopqrs' name='idtipopqrs' value="{{ old('idtipopqrs') }}">
					<option value="">Seleccionar ...</option>
					@foreach($tipopqrss as $tipopqrs)
					<option value="{{ $tipopqrs->idtipopqrs }}">{{ $tipopqrs->tipo }}</option>
					@endforeach
				</select>
				@error('idtipopqrs')
				<small class="text-danger">Seleccione el tipo de la pqrs</small>
				@enderror
			</div>
            
			<div class="col-md-6">
				<label for="descripcion" class="form-label">Descripcion</label>
				<textarea type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion') }}"></textarea>
				@error('descripcion')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
            <div class="col-md-6">
				<label for="idcontratoservicio" class="form-label">Fecha del servicio del contrato</label>
				<select class="form-control" id='idcontratoservicio' name='idcontratoservicio' value="{{ old('idcontratoservicio') }}">
					<option value="">Seleccionar ...</option>
					@foreach($contratoservicios as $contratoservicio)
					<option value="{{ $contratoservicio->idcontratoservicio }}">{{ $contratoservicio->fechainicial }}</option>
					@endforeach
				</select>
				@error('idcontratoservicio')	
				<small class="text-danger">{{$message}}</small>
				@enderror
			</div>
			<div class="col-md-6">
				<label for="idestado" class="form-label">Estado de la pqrs</label>
				<select class="form-control" id='idestado' name='idestado' value="{{ old('idestado') }}" readonly>
					<option value="1">Activo</option>
				</select>

			</div>
			<div class="col-md-6 mt-3">
				<button type="submit" class="btn btn-primary" onclick="confirm('Seguro que quieres enviar tu PQRS?')">Enviar PQRS</button>
			</div>
		</form>
	</div>
	<br>
	<br>
    <script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function() {

		var now = new Date();

		var day = ("0" + now.getDate()).slice(-2);
		var month = ("0" + (now.getMonth() + 1)).slice(-2);

		var today = now.getFullYear() + "-" + (month) + "-" + (day);
		$("#fecha").val(today);
	});
</script>
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
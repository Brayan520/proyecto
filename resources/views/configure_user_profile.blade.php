@extends('layouts.app')

@section('content')
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
    </style>
<body style="font-family: Arial, Helvetica, sans-serif">
<div class="container mb-5" style="background-color: #fff;" >

<!--- Mensajes -->
@include('msjs')


  <h2 class="text-center">Actualizar mi datos <hr></h2>
  <div class="row justify-content-center">
      <div class="col-md-8">
        <form action="{{route('changePassword')}}" method="POST" class="needs-validation" novalidate>
            @csrf 

            <div class="row mb-3" >
                <div class="form-group mt-3">
                    <label for="nombre">Nombre de Usuario</label>
                    <input type="text" name="nombre" value="{{ Auth::user()->nombre_apellido }}" class="form-control @error('nombre') is-invalid @enderror" style="background:lightgray" readonly>
                      @error('nombre')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>    
            <div class="row mb-3">
              <div class="form-group mt-3">
                  <label for="password_actual">Clave Actual</label>
                  <input type="password" name="password_actual" class="form-control @error('password_actual') is-invalid @enderror" required>
                    @error('password_actual')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-group mt-3">
                    <label for="new_password ">Nueva Clave</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-group mt-3">
                    <label for="confirm_password">Confirmar nueva Clave</label>
                    <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror"required>
                    @error('confirm_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row text-center mb-4 mt-5">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" id="formSubmit">Guardar Cambios</button>
                    <a href="/home" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>
        </form>
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
</html
@endsection

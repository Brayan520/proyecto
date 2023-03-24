@extends('layouts.app')

@section('content')
<style>
img {
  width: 60%;
  height: 120%;
  margin-left: 100px;
 }
.body{
  background-color: rgb(233, 233, 233);
}
.contenido {
  max-width: 540px;
  margin: 8vh auto; }

.cuadro {
  background: #ffffff;
  padding: 30px 30px 20px;
  border-radius: 10px; }

.Iniciar-espacio h4 {
  color: #878787;
  text-align: center;
  margin-bottom: 50px; }

.Iniciar-espacio .checar {
  color: #C9C8C8; }

.Iniciar-espacio .checar label {
  text-transform: none; }

.Iniciar-espacio .btn {
  width: 100%;
  text-transform: uppercase;
  font-size: 14px;
  padding: 15px;
  border: 0px; }

.Iniciar-espacio label {
  color: #878787;
  text-transform: uppercase; }

.Iniciar-espacio label a {
  color: #ff2e44; }

.cuadro-social {
  margin: 0px -30px;
  border-top: 1px solid #e7e7e7;
  padding: 30px 0px;
  background: #fcfcfc; }

.boton {
  padding: 0 30px; 
}
  .boton .facebook {
    background: #3b5998;
    color: #fff; }

  .boton .email {
    background: #ff0000;
    color: #fff; 
  }

.boton i {
  padding: 19px; }
    </style>



<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<body class="body">
	<script>
		swal.fire("Bienvenido al inicio de sesion")
	</script>
	<div class=" align-content-center">
		<div class="container">
			<div class="contenido">
        <img style="width: 250px; margin-left: 150px; margin-top: -50px;" src="https://i.ibb.co/4WYRgsy/QSOFT.png" alt="QSOFT" border="0"/>
				<div class="cuadro">
					<div>
            <div>
              <h3 style="text-align: center; font-width: bold; font-size: 30px; color:darkblue">Iniciar Sesión</h3>
</div>
<hr>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordar Contraseña') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar Sesión') }}
                                </button>
</div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link nav-link" style="color: darkblue" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste la contraseña?') }}
                                    </a>
                                @endif
                            </div>
                            <br>
                            <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                              <p>Si eres nuevo <a style="color:darkblue; margin-left: 29%; margin-top: -23px" class="nav-link" href="{{ route('register') }}">registrate aqui.</a></p>
</div>
</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

    
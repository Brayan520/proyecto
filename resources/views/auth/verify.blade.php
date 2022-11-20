@extends('layouts.app')

@section('content')
<body style="background-color:#E5E5E5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color: darkblue; font-widht: bold;">{{ __('Verifica su correo electronico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico..') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, verifique su correo electrónico para obtener un enlace de verificación..') }}
                    {{ __('Si no recibiste el correo electrónico') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Haga clic aquí para solicitar otro') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection

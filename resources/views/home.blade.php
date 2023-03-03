@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido! Ha iniciado Sesión, por favor selecciona el campo que quieras visualizar!!') }}
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('aspirante.index') }}" class="btn btn-primary ti-back-left">{{ __('Aspirantes') }}</a>
    <a href="{{ route('calificacion.index') }}" class="btn btn-primary ti-back-left">{{ __('Calificaciones') }}</a>
    <a href="{{ route('cargo.index') }}" class="btn btn-primary ti-back-left">{{ __('Cargos') }}</a>
    <a href="{{ route('colaborador.index') }}" class="btn btn-primary ti-back-left">{{ __('Colaboradores') }}</a>
    <a href="{{ route('contratacion.index') }}" class="btn btn-primary ti-back-left">{{ __('Contrataciones') }}</a>
    <a href="{{ route('contratoservicio.index') }}" class="btn btn-primary ti-back-left">{{ __('Contrataciones de servicios') }}</a>
    <a href="{{ route('detalleservicio.index') }}" class="btn btn-primary ti-back-left">{{ __('Detalles de servicios') }}</a>
    <a href="{{ route('entrevista.index') }}" class="btn btn-primary ti-back-left">{{ __('Entrevistas') }}</a>
    <a href="{{ route('estado.index') }}" class="btn btn-primary ti-back-left">{{ __('Estados') }}</a>
    <a href="{{ route('hojadevida.index') }}" class="btn btn-primary ti-back-left">{{ __('Hojas de vida') }}</a>
    <a href="{{ route('perfil.index') }}" class="btn btn-primary ti-back-left">{{ __('Perfiles') }}</a>
    <a href="{{ route('postulacion.index') }}" class="btn btn-primary ti-back-left">{{ __('Postulaciones') }}</a>
    <a href="{{ route('pqrs.index') }}" class="btn btn-primary ti-back-left">{{ __('Pqrs') }}</a>
    <a href="{{ route('puntuacion.index') }}" class="btn btn-primary ti-back-left">{{ __('Puntuaciones de entrevistas') }}</a>
    <a href="{{ route('respuesta.index') }}" class="btn btn-primary ti-back-left">{{ __('Respuesta') }}</a>
    <a href="{{ route('servicio.index') }}" class="btn btn-primary ti-back-left">{{ __('Servicios') }}</a>
    <a href="{{ route('solicitudservicio.index') }}" class="btn btn-primary ti-back-left">{{ __('Solicitud de servicios') }}</a>
    <a href="{{ route('tipopqrs.index') }}" class="btn btn-primary ti-back-left">{{ __('Tipos de pqrs') }}</a>
    <a href="{{ route('vacante.index') }}" class="btn btn-primary ti-back-left">{{ __('Vacantes') }}</a>
</div>
@endsection



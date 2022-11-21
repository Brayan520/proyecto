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
    <a href="{{ route('vacante.index') }}" class="btn btn-primary ti-back-left">{{ __('Vacantes') }}</a>
    <a href="{{ route('postulacion.index') }}" class="btn btn-primary ti-back-left">{{ __('Postulaciones') }}</a>
    <a href="{{ route('aspirante.index') }}" class="btn btn-primary ti-back-left">{{ __('Aspirantes') }}</a>
    <a href="{{ route('entrevista.index') }}" class="btn btn-primary ti-back-left">{{ __('Entrevistas') }}</a>
    <a href="{{ route('solicitudservicio.index') }}" class="btn btn-primary ti-back-left">{{ __('Solicitud Servicio') }}</a>
    <a href="{{ route('detalleservicio.index') }}" class="btn btn-primary ti-back-left">{{ __('Detalle Servicio') }}</a>
    <a href="{{ route('contratoservicio.index') }}" class="btn btn-primary ti-back-left">{{ __('Contrato Servicio') }}</a>
    <a href="{{ route('calificacion.index') }}" class="btn btn-primary ti-back-left">{{ __('Calificaciones') }}</a>
    <a href="{{ route('colaborador.index') }}" class="btn btn-primary ti-back-left">{{ __('Colaboradores') }}</a>
    <a href="{{ route('contratacion.index') }}" class="btn btn-primary ti-back-left">{{ __('Contrataciones') }}</a>
</div>
@endsection



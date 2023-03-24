@extends('layouts.app')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <div class="card-title">Usuarios</div>
            <p class="card-category">Vista detallada del usuario {{ $hojadevida ->nombre_apellido }}</p>
          </div>
          <!--body-->
          <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success" role="success">
              {{ session('success') }}
            </div>
            @endif
            <div class="row">
              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <a href="#">
                          <img src="" alt="image" class="avatar">
                          <h5 class="title mt-3">{{ $hojadevidas->nombre_apellido }}</h5>
                        </a>
                        <p class="description">
                        {{ $hojadevidas->nombre }} <br>
                        {{ $hojadevidas->apellido }} <br>
                        {{ $hojadevidas->tipoidentificacion }}
                        {{ $hojadevidas->identificacion }}
                        {{ $hojadevidas->correo }}
                        {{ $hojadevidas->direccion }}
                        {{ $hojadevidas->barrio }}
                        {{ $hojadevidas->telefono }}
                        {{ $hojadevidas->celular }}
                        {{ $hojadevidas->ciudad }}
                        {{ $hojadevidas->estudios }}
                        {{ $hojadevidas->fecharegistro }}
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam officia corporis molestiae aliquid provident placeat.
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <button class="btn btn-sm btn-primary">Editar</button>
                    </div>
                  </div>
                </div>
              </div><!--end card user-->

              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <a href="#" class="d-flex">
                          <img src="" alt="image" class="avatar">
                          <h5 class="title mx-3">{{ $hojadevidas->nombre_apellido }}</h5>
                        </a>
                        <p class="description">
                        {{ $hojadevidas->nombre }} <br>
                        {{ $hojadevidas->apellido }} <br>
                        {{ $hojadevidas->tipoidentificacion }}
                        {{ $hojadevidas->identificacion }}
                        {{ $hojadevidas->correo }}
                        {{ $hojadevidas->direccion }}
                        {{ $hojadevidas->barrio }}
                        {{ $hojadevidas->telefono }}
                        {{ $hojadevidas->celular }}
                        {{ $hojadevidas->ciudad }}
                        {{ $hojadevidas->estudios }}
                        {{ $hojadevidas->fecharegistro }}
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam officia corporis molestiae aliquid provident
                      placeat.
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('hojadevidaadmin.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
                      <button class="btn btn-sm btn-primary">Editar</button>
                    </div>
                  </div>
                </div>
              </div><!--end card user 2-->

              <!--Start third-->
              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <table class="table table-bordered table-striped">
                      <tbody>
                        <tr>
                          <th>ID</th>
                          <td>{{ $hojadevidas->idhojadevida }}
                          </td>
                        </tr>
                        <tr>
                          <th>Nombre</th>
                          <td>{{ $hojadevidas->nombre }}</td>
                        </tr>
                        <tr>
                          <th>Apellido</th>
                          <td>{{ $hojadevidas->apellido }}</td>
                        </tr>
                        <tr>
                          <th>Tipo identificación</th>
                          <td>{{ $hojadevidas->tipoidentificacion }}</td>
                        </tr>
                        <tr>
                          <th>Número identificación</th>
                          <td>{{ $hojadevidas->identificacion }}</td>
                        </tr>
                        <tr>
                          <th>Correo</th>
                          <td><span class="badge badge-primary">{{ $hojadevidas->correo }}</span></td>
                        </tr>
                        <tr>
                          <th>Dirección</th>
                          <td>{{ $hojadevidas->direccion }}</td>
                        </tr>
                        <tr>
                          <th>Barrio</th>
                          <td>{{ $hojadevidas->barrio }}</td>
                        </tr>
                        <tr>
                          <th>Telefono</th>
                          <td>{{ $hojadevidas->telefono }}</td>
                        </tr>
                        <tr>
                          <th>Celular</th>
                          <td>{{ $hojadevidas->celular }}</td>
                        </tr>
                        <tr>
                          <th>Ciudad</th>
                          <td>{{ $hojadevidas->ciudad }}</td>
                        </tr>
                        <tr>
                          <th>Estudios</th>
                          <td>{{ $hojadevidas->estudios }}</td>
                        </tr>
                        <tr>
                          <th>Fecha registro</th>
                          <td>{{ $hojadevidas->fecharegistro }}</td>
                        </tr>
                     
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('hojadevidaadmin.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
                      <a href="#" class="btn btn-sm btn-twitter"> Editar </a>
                    </div>
                  </div>
                </div>
              </div>
              <!--end third-->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
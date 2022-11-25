<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AspiranteController;
use App\Http\Controllers\CalificacionController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\ContratacionController;
use App\Http\Controllers\ContratoservicioController;
use App\Http\Controllers\DetalleservicioController;
use App\Http\Controllers\EntrevistaController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\HojadevidaController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PostulacionController;
use App\Http\Controllers\PqrsController;
use App\Http\Controllers\PuntuacionController;
use App\Http\Controllers\RespuestaController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\SolicitudservicioController;
use App\Http\Controllers\TipopqrsController;
use App\Http\Controllers\VacanteController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');

});

Route::get('/aspirante', function () {
    return redirect('/aspirante');
});
Route::resource ('aspirante', AspiranteController::class);

Route::get('/calificacion', function () {
    return redirect('/calificacion');
});
Route::resource ('calificacion', CalificacionController::class);

Route::get('/cargo', function () {
    return redirect('/cargo');
});
Route::resource ('cargo', CargoController::class);

Route::get('/colaborador', function () {
    return redirect('/colaborador');
});
Route::resource ('colaborador', ColaboradorController::class);

Route::get('/contratacion', function () {
    return redirect('/contratacion');
});
Route::resource ('contratacion', ContratacionController::class);

Route::get('/contratoservicio', function () {
    return redirect('/contratoservicio');
});
Route::resource ('contratoservicio', ContratoservicioController::class);

Route::get('/detalleservicio', function () {
    return redirect('/detalleservicio');
});
Route::resource ('detalleservicio', DetalleservicioController::class);

Route::get('/entrevista', function () {
    return redirect('/entrevista');
});
Route::resource ('entrevista', EntrevistaController::class);

Route::get('/estado', function () {
    return redirect('/estado');
});
Route::resource ('estado', EstadoController::class);

Route::get('/hojadevida', function () {
    return redirect('/hojadevida');
});
Route::resource ('hojadevida', HojadevidaController::class);

Route::get('/perfil', function () {
    return redirect('/perfil');
});
Route::resource ('perfil', PerfilController::class);

Route::get('/postulacion', function () {
    return redirect('/postulacion');
});
Route::resource ('postulacion', PostulacionController::class);

Route::get('/pqrs', function () {
    return redirect('/pqrs');
});
Route::resource ('pqrs', PqrsController::class);

Route::get('/puntuacion', function () {
    return redirect('/puntuacion');
});
Route::resource ('puntuacion', PuntuacionController::class);

Route::get('/respuesta', function () {
    return redirect('/respuesta');
});
Route::resource ('respuesta', RespuestaController::class);

Route::get('/servicio', function () {
    return redirect('/servicio');
});
Route::resource ('servicio', ServicioController::class);

Route::get('/solicitudservicio', function () {
    return redirect('/solicitudservicio');
});
Route::resource ('solicitudservicio', SolicitudservicioController::class);

Route::get('/tipopqrs', function () {
    return redirect('/tipopqrs');
});
Route::resource ('tipopqrs', TipopqrsController::class);

Route::get('/vacante', function () {
    return redirect('/vacante');
});
Route::resource ('vacante', VacanteController::class);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

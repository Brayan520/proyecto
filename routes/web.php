<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacanteController;
use App\Http\Controllers\PostulacionController;
use App\Http\Controllers\AspiranteController;
use App\Http\Controllers\EntrevistaController;
use App\Http\Controllers\SolicitudservicioController;
use App\Http\Controllers\DetalleservicioController;
use App\Http\Controllers\ContratoservicioController;
use App\Http\Controllers\CalificacionController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\ContratacionController;
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

Route::get('/vacante', function () {
    return redirect('/vacante');
});
Route::resource ('vacante', VacanteController::class);

Route::get('/postulacion', function () {
    return redirect('/postulacion');
});
Route::resource ('postulacion', PostulacionController::class);

Route::get('/aspirante', function () {
    return redirect('/aspirante');
});
Route::resource ('aspirante', AspiranteController::class);

Route::get('/entrevista', function () {
    return redirect('/entrevista');
});
Route::resource ('entrevista', EntrevistaController::class);

Route::get('/solicitudservicio', function () {
    return redirect('/solicitudservicio');
});
Route::resource ('solicitudservicio', SolicitudservicioController::class);

Route::get('/detalleservicio', function () {
    return redirect('/detalleservicio');
});
Route::resource ('detalleservicio', DetalleservicioController::class);

Route::get('/contratoservicio', function () {
    return redirect('/contratoservicio');
});
Route::resource ('contratoservicio', ContratoservicioController::class);

Route::get('/calificacion', function () {
    return redirect('/calificacion');
});
Route::resource ('calificacion', CalificacionController::class);

Route::get('/colaborador', function () {
    return redirect('/colaborador');
});
Route::resource ('colaborador', ColaboradorController::class);

Route::get('/contratacion', function () {
    return redirect('/contratacion');
});
Route::resource ('contratacion', ContratacionController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

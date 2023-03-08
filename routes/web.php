<?php
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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



//Cliente
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CatalogoservicioController;
use App\Http\Controllers\TrabajaconnosotrosController;
use App\Http\Controllers\CalificacionesController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\QuienessomosController;
use App\Http\Controllers\VacantelimpiezaController;
use App\Http\Controllers\PostularController;
use App\Http\Controllers\EstadopqrController;
use App\Http\Controllers\HistorialcalificacionesController;

//Administrador
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\PqrsadminController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\ReportepqrsController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ContactanosUsuarioController;
use App\Http\Controllers\QuienessomosUsuarioController;
use App\Http\Controllers\CalificacionesadminController;
use App\Http\Controllers\HojadevidaAdminController;
use App\Http\Controllers\ContratacionadminController;

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



Route::get('/home', function () {
    return redirect('/home');
});
Route::resource ('home', HomeController::class);

Route::get('/', function () {
    return redirect('/index');
});
Route::resource ('index', IndexController::class);

Route::get('/aspirante', function () {
    return redirect('/aspirante');
});
Route::resource ('aspirante', AspiranteController::class);

Route::get('/contactanos', function () {
    return redirect('/contactanos')->name('index');
});
Route::resource ('contactanos', ContactanosUsuarioController::class);

Route::get('/quienessomos', function () {
    return redirect('/quienessomos')->name('index');
});
Route::resource ('quienessomos', QuienessomosUsuarioController::class);

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

Route::get('/estadopqr', function () {
    return redirect('/estadopqr');
});
Route::resource ('estadopqr', EstadopqrController::class);

Route::get('/historialcalificaciones', function () {
    return redirect('/historialcalificaciones');
});
Route::resource ('historialcalificaciones', HistorialcalificacionesController::class);







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [HomeController::class, 'getUser']);



/*Clientes*/
Route::get('/cliente', function () {
    return redirect('/cliente');
});
Route::resource ('cliente', ClienteController::class);

Route::get('/catalogoservicio', function () {
    return redirect('/catalogoservicio');
});
Route::resource ('catalogoservicio', CatalogoservicioController::class);

Route::get('/trabajaconnosotros', function () {
    return redirect('/trabajaconnosotros');
});
Route::resource ('trabajaconnosotros', TrabajaconnosotrosController::class);

Route::get('/calificaciones', function () {
    return redirect('/calificaciones');
});
Route::resource ('calificaciones', CalificacionesController::class);

Route::get('/quienessomos', function () {
    return redirect('/quienessomos');
});
Route::resource ('quienessomos', QuienessomosController::class);

Route::get('/contactanos', function () {
    return redirect('/contactanos');
});
Route::resource ('contactanos', ContactanosController::class);

Route::get('/vacantelimpieza', function () {
    return redirect('/vacantelimpieza');
});
Route::resource ('vacantelimpieza', VacantelimpiezaController::class);

Route::get('/postular', function () {
    return redirect('/postular');
});
Route::resource ('postular', PostularController::class);


/*Administrador*/
Route::get('/administrador', function () {
    return redirect('/administrador');
});
Route::resource ('administrador', AdministradorController::class);

Route::get('/pqrsadmin', function () {
    return redirect('/pqrsadmin');
});
Route::resource ('pqrsadmin', PqrsadminController::class);

Route::get('/reportes', function () {
    return redirect('/reportes');
});
Route::resource ('reportes', ReportesController::class);

Route::get('/reportepqrs', function () {
    return redirect('/reportepqrs');
});
Route::resource ('reportepqrs', ReportepqrsController::class);

Route::get('/chart', function () {
    return redirect('/chart');
});
Route::resource ('chart', ChartController::class);

Route::get('/calificacionesadmin', function () {
    return redirect('/calificacionesadmin');
});
Route::resource ('calificacionesadmin', CalificacionesadminController::class);

Route::get('/hojadevidaadmin', function () {
    return redirect('/hojadevidaadmin');
});
Route::resource ('hojadevidaadmin', HojadevidaadminController::class);

Route::get('/quattrosoft/admin/contratacion', function () {
    return redirect('/quattrosoft/admin/contratacion');
});
Route::resource ('/quattrosoft/admin/contratacion', ContratacionadminController::class);

Route::get('/contratacionadmin', function () {
    return redirect('/contratacionadmin');
});
Route::resource ('contratacionadmin', ContratacionadminController::class);


?>
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacanteController;
use App\Http\Controllers\PostulacionController;
use App\Http\Controllers\AspiranteController;
use App\Http\Controllers\EntrevistaController;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

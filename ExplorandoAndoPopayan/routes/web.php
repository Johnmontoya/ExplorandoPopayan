<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SitioController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\PromocioneController;
use App\Http\Controllers\RutaController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;


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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::resource('usuarios','App\Http\Controllers\UserController')->names('usuarios');
Route::resource('welcome','App\Http\Controllers\WelcomeController');
//Route::resource('/', WelcomeController::class);
Route::resource('eventos', EventoController::class);
Route::resource('estaciones','App\Http\Controllers\EstacionController')->names('estaciones');
Route::resource('rutas','App\Http\Controllers\RutaController')->names('rutas');
Route::resource('galerias','App\Http\Controllers\GaleriaController')->names('galerias');
Route::resource('comentarios','App\Http\Controllers\ComentarioController')->names('comentarios');
Route::resource('riesgos','App\Http\Controllers\RiesgoController')->names('riesgos');

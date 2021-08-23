<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\EstacionController;
use App\Http\Controllers\RutaController;
use App\Http\Controllers\RiesgoController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\WelcomeController;
 
Route::get('/',[WelcomeController::class, 'index']);
Route::get('/usuarios', [UserController::class, 'index']);
Route::get('/eventos', [EventoController::class, 'index']);


Route::resource('usuarios', UserController::class)->names('usuarios');

Route::resource('usuarios',UserController::class)->names('admin.users');
Route::resource('usuarios/edit',UserController::class)->names('admin.usuarios.edit');
Route::resource('usuarios/create',UserController::class)->names('admin.usuarios.create');

Route::resource('estaciones',EstacionController::class)->names('admin.estaciones');
Route::resource('estaciones/edit',EstacionController::class)->names('admin.estaciones.edit');
Route::resource('estaciones/create',EstacionController::class)->names('admin.estaciones.create');
Route::resource('estaciones/delete',EstacionController::class)->names('admin.estaciones.delete');

Route::resource('galerias',GaleriaController::class)->names('admin.galerias');
Route::resource('galerias/edit',GaleriaController::class)->names('admin.galerias.edit');
Route::resource('galerias/create',GaleriaController::class)->names('admin.galerias.create');
Route::resource('galerias/delete',GaleriaController::class)->names('admin.galerias.delete');

Route::resource('riesgos',RiesgoController::class)->names('admin.riesgos');
Route::resource('riesgos/edit',RiesgoController::class)->names('admin.riesgos.edit');
Route::resource('riesgos/create',RiesgoController::class)->names('admin.riesgos.create');
Route::resource('riesgos/delete',RiesgoController::class)->names('admin.riesgos.delete');

Route::resource('rutas',RutaController::class)->names('admin.rutas');
Route::resource('rutas/edit',RutaController::class)->names('admin.rutas.edit');
Route::resource('rutas/create',RutaController::class)->names('admin.rutas.create');
Route::resource('rutas/delete',RutaController::class)->names('admin.rutas.delete');


Route::resource('eventos',EventoController::class)->names('admin.eventos');
Route::resource('eventos/edit',EventoController::class)->names('admin.eventos.edit');
Route::resource('eventos/create',EventoController::class)->names('admin.eventos.create');
Route::resource('eventos/delete',EventoController::class)->names('admin.eventos.layout');

Route::resource('comentarios',ComentarioController::class)->names('admin.comentarios');
Route::resource('comentarios/edit',ComentarioController::class)->names('admin.comentarios.edit');
Route::resource('comentarios/layout',ComentarioController::class)->names('admin.comentarios.layout');
Route::resource('comentarios/create',ComentarioController::class)->names('admin.comentarios.create');

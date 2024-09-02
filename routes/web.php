<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Administracion\DashboardController;

use App\Http\Controllers\Administracion\InicioAdminController;
use App\Http\Controllers\Administracion\DocenciaMasonicaAdminController;

use App\Http\Middleware\RedirectIfAuthenticated;

use App\Http\Controllers\web\InicioController;
use App\Http\Controllers\web\DocenciaMasonicaController;



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');


Route::get('register',[RegisterController::class,'showRegistrationForm'])->name('register')->middleware(RedirectIfAuthenticated::class);
Route::post('register',[RegisterController::class,'register'])->middleware(RedirectIfAuthenticated::class);

Route::get('login',[LoginController::class,'showLoginForm'])->name('login')->middleware(RedirectIfAuthenticated::class);
Route::post('login',[LoginController::class,'login'])->middleware(RedirectIfAuthenticated::class);


Route::post('logout',[LoginController::class,'logout'])->name('logout');

// INICIO ADMINISTRACION

Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('administracion/nosotros',[InicioAdminController::class, 'nosotros'])->middleware(['auth'])->name('administracion.nosotros');
Route::post('administracion/nosotros/subir-imagen', [InicioAdminController::class, 'subirNosotrosImagen'])->name('administracion.nosotros.imagenes.subir');
Route::post('administracion/nosotros/descripcion-actualizar', [InicioAdminController::class, 'actualizarNosotrosDescripcion'])->name('administracion.nosotros.descripcion.actualizar');

Route::get('administracion/francmasoneria',[InicioAdminController::class, 'francmasoneria'])->middleware(['auth'])->name('administracion.francmasoneria');
Route::post('administracion/francmasoneria/subir-imagen', [InicioAdminController::class, 'subirFrancmasoneriaImagen'])->name('administracion.francmasoneria.imagenes.subir');
Route::post('administracion/francmasoneria/descripcion-actualizar', [InicioAdminController::class, 'actualizarFrancmasoneriaDescripcion'])->name('administracion.francmasoneria.descripcion.actualizar');

Route::get('administracion/declaracion_principios',[InicioAdminController::class, 'declaracionPrincipios'])->middleware(['auth'])->name('administracion.declaracion_principios');
Route::post('administracion/declaracion_principios/subir-imagen', [InicioAdminController::class, 'subirDeclaracionPrincipiosImagen'])->name('administracion.declaracion_principios.imagenes.subir');
Route::post('administracion/declaracion_principios/descripcion-actualizar', [InicioAdminController::class, 'actualizarDeclaracionPrincipiosDescripcion'])->name('administracion.declaracion_principios.descripcion.actualizar');

Route::get('administracion/templos',[InicioAdminController::class, 'templos'])->middleware(['auth'])->name('administracion.templos');
Route::post('administracion/templos/subir-imagen', [InicioAdminController::class, 'subirTemplosImagen'])->name('administracion.templos.imagenes.subir');
Route::post('administracion/templos/descripcion-actualizar', [InicioAdminController::class, 'actualizarTemplosDescripcion'])->name('administracion.templos.descripcion.actualizar');
Route::post('administracion/templos/imagenes-eliminar/{id}', [InicioAdminController::class, 'eliminarTemplosImages'])->name('administracion.templos.imagenes.eliminar');

Route::get('administracion/masones_ilustres',[InicioAdminController::class, 'masonesIlustres'])->middleware(['auth'])->name('administracion.masones_ilustres');
Route::post('administracion/masones_ilustres/subir-imagen', [InicioAdminController::class, 'subirMasonesIlustresImagen'])->name('administracion.masones_ilustres.imagenes.subir');
Route::post('administracion/masones_ilustres/descripcion-actualizar', [InicioAdminController::class, 'actualizarMasonesIlustresDescripcion'])->name('administracion.masones_ilustres.descripcion.actualizar');
Route::post('administracion/masones_ilustres/imagenes-eliminar/{id}', [InicioAdminController::class, 'eliminarMasonesIlustresImages'])->name('administracion.masones_ilustres.imagenes.eliminar');


// DOCENTES MASONICOS ADMINISTRACION 

Route::get('administracion/trabajos_masonicos',[DocenciaMasonicaAdminController::class, 'trabajosMasonicos'])->middleware(['auth'])->name('administracion.trabajos_masonicos');
Route::post('administracion/trabajos_masonicos/actualizar', [DocenciaMasonicaAdminController::class, 'actualizarTrabajosMasonicos'])->name('administracion.trabajos_masonicos.actualizar');

Route::get('administracion/revistas_masonicas',[DocenciaMasonicaAdminController::class, 'revistasMasonicas'])->middleware(['auth'])->name('administracion.revistas_masonicas');
Route::post('administracion/revistas_masonicas/actualizar', [DocenciaMasonicaAdminController::class, 'actualizarRevistasMasonicas'])->name('administracion.revistas_masonicas.actualizar');

Route::get('administracion/libros_masonicos',[DocenciaMasonicaAdminController::class, 'librosMasonicos'])->middleware(['auth'])->name('administracion.libros_masonicos');
Route::post('administracion/libros_masonicos/actualizar', [DocenciaMasonicaAdminController::class, 'actualizarLibrosMasonicos'])->name('administracion.libros_masonicos.actualizar');

// INICIO WEB 

Route::get('nosotros',[InicioController::class, 'nosotros'])->name('nosotros');
Route::get('francmasoneria',[InicioController::class, 'francmasoneria'])->name('francmasoneria');
Route::get('declaracion_principios',[InicioController::class, 'declaracion_principios'])->name('declaracion_principios');
Route::get('templos',[InicioController::class, 'templos'])->name('templos');
Route::get('docencia_masonica',[InicioController::class, 'docencia_masonica'])->name('docencia_masonica');

Route::get('masones_ilustres',[InicioController::class, 'masonesIlustres'])->name('masones_ilustres');


// DOCENCIA MASONICA WEB 

Route::get('trabajos_masonicos',[DocenciaMasonicaController::class, 'trabajosMasonicos'])->name('trabajos_masonicos');
Route::get('libros_masonicos',[DocenciaMasonicaController::class, 'librosMasonicos'])->name('libros_masonicos');
Route::get('revistas_masonicas',[DocenciaMasonicaController::class, 'revistasMasonicas'])->name('revistas_masonicas');
Route::get('conferencias_masonicas',[DocenciaMasonicaController::class, 'conferenciasMasonicas'])->name('conferencias_masonicas');
Route::get('videos_masonicos',[DocenciaMasonicaController::class, 'videosMasonicos'])->name('videos_masonicos');


// RED DE LOGIAS WEB

Route::get('red_logias',[DocenciaMasonicaController::class, 'redLogias'])->name('red_logias');
Route::get('eventos',[DocenciaMasonicaController::class, 'eventos'])->name('eventos');
Route::get('contactanos',[DocenciaMasonicaController::class, 'contactanos'])->name('contactanos');




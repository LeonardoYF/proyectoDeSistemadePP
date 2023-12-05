<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

$controller_path = 'App\Http\Controllers';

// Main Page Route

// pages


Route::middleware([
    'web','auth','verified','aprobado',
    'auth:sanctum',
    config('jetstream.auth_session'),
    
])->group(function () {
    
        $controller_path = 'App\Http\Controllers';

        Route::get('/', $controller_path . '\pages\HomePage@index')->name('pages-home');
        
        Route::prefix('perfil')->group(function () {
            $controller_path = 'App\Http\Controllers';
            // Rutas para PerfilController
            Route::get('/', $controller_path . '\Perfil\PerfilController@index')->name('perfil.index');
            
            
        });
        Route::prefix('postulaciones')->group(function () {
            $controller_path = 'App\Http\Controllers';
            Route::get('/', $controller_path . '\Perfil\PostulacionController@index')->name('postulaciones.index');
            // Otras rutas para PostulacionController
        });
        Route::prefix('convocatorias')->group(function () {
            $controller_path = 'App\Http\Controllers';
            Route::get('/', $controller_path . '\Convocatorias\ConvocatoriaController@index')->name('postulaciones.index');
            // Otras rutas para PostulacionController
        });
        Route::prefix('admin')->name('admin.')->group(function () {
            $controller_path_estudiante = 'App\Http\Controllers\Admin\EstudiantesController';
            
            Route::get('/estudiantes',  [$controller_path_estudiante, 'index'])->name('estudiantes.index');
            Route::put('/estudiantes/{id}', [$controller_path_estudiante, 'update'])->name('estudiantes.update');
            Route::get('/count-pendientes', [$controller_path_estudiante, 'countPendientes'])->name('count.pendientes');
            
            $controller_path_empresa = 'App\Http\Controllers\Admin\EmpresasController';
            Route::get('/empresas',  [$controller_path_empresa, 'index'])->name('empresas.index');
            Route::put('/empresas/{id}', [$controller_path_empresa, 'update'])->name('empresas.update');
        });;
        Route::resource('/avisos', 'App\Http\Controllers\AvisoController');
    
    
});

Route::get('/espera-aprobacion', 'App\Http\Controllers\AprobacionUserController@index')->name('espera-aprobacion');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\EmpresaController;

// Ruta raíz
Route::get('/', function () {
    return view('welcome');
});

// Rutas para los recursos
Route::resource('estudiantes', EstudianteController::class);
Route::resource('tutores', TutorController::class);
Route::resource('empresas', EmpresaController::class);

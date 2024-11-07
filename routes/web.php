<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\SubtemaController;

// Rutas de autenticación
Auth::routes();

// Ruta principal después del login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    Route::resource('materias', MateriaController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('juegos', JuegoController::class);
    Route::resource('examenes', ExamenController::class);
    Route::resource('temas', TemaController::class);
    Route::resource('subtemas', SubtemaController::class);
});

// Ruta por defecto
Route::get('/', function () {
    return view('welcome');
});

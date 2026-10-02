<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InteresController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\UsuarioController;

// Redireccionar al Dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Rutas sin bloqueo de seguridad general
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Rutas de Intereses
Route::get('/intereses/crear', [InteresController::class, 'create'])->name('intereses.create');
Route::post('/intereses', [InteresController::class, 'store'])->name('intereses.store');

// Rutas de Personas
Route::get('/personas/crear', [PersonaController::class, 'create'])->name('personas.create');
Route::post('/personas', [PersonaController::class, 'store'])->name('personas.store');

// Rutas de Usuarios
Route::resource('usuarios', UsuarioController::class);
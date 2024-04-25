<?php

use App\Http\Controllers\DuenoController;
use App\Http\Controllers\MascotaController;
use App\Models\Dueno;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

// Rutas de autenticación
Route::get('/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::post('/logout', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// Rutas de registro
Route::get('/register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'store'])
    ->middleware('guest');

// Rutas existentes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/mascotas', [MascotaController::class, 'index'])->name('mascotas.index');
Route::get('/mascotas/create',[MascotaController::class,'create'])->name('mascotas.create');
Route::post('/mascotas/store',[MascotaController::class,'store'])->name('mascotas.store');
Route::get('/mascotas/{id}/edit',[MascotaController::class,'edit'])->name('mascotas.edit');
Route::put('/mascotas/{id}/update',[MascotaController::class,'update'])->name('mascotas.update');
Route::delete('/mascotas/{id}/delete', [MascotaController::class,'destroy'])->name('mascotas.destroy');


Route::get('/duenos',[DuenoController::class,'index'])->name('duenos.index');
Route::get('/duenos/create',[DuenoController::class,'create'])->name('duenos.create');
Route::post('/duenos/store',[DuenoController::class,'store'])->name('duenos.store');
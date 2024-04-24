<?php

use App\Http\Controllers\DuenoController;
use App\Http\Controllers\MascotaController;
use App\Models\Dueno;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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
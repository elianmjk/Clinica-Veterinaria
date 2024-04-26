<?php
use App\Http\Controllers\DuenoController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/mascotas', [MascotaController::class, 'index'])->name('mascotas.index');
Route::get('/mascotas/create', [MascotaController::class, 'create'])->name('mascotas.create');
Route::post('/mascotas/store', [MascotaController::class, 'store'])->name('mascotas.store');
Route::get('/mascotas/{id}/edit', [MascotaController::class, 'edit'])->name('mascotas.edit');
Route::put('/mascotas/{id}/update', [MascotaController::class, 'update'])->name('mascotas.update');
Route::delete('/mascotas/{id}/delete', [MascotaController::class, 'destroy'])->name('mascotas.destroy');

Route::get('/duenos', [DuenoController::class, 'index'])->name('duenos.index');
Route::get('/duenos/create', [DuenoController::class, 'create'])->name('duenos.create');
Route::post('/duenos/store', [DuenoController::class, 'store'])->name('duenos.store');
Route::get('/duenos/{id}/edit', [DuenoController::class, 'edit'])->name('duenos.edit');
Route::put('/duenos/{id}/update', [DuenoController::class, 'update'])->name('duenos.update');
Route::delete('/duenos/{id}/delete', [DuenoController::class, 'destroy'])->name('duenos.destroy');


Route::get('/visitas', [VisitaController::class, 'index'])->name('visitas.index');
Route::get('/visitas/create', [VisitaController::class, 'create'])->name('visitas.create');
Route::post('/visitas/store', [VisitaController::class, 'store'])->name('visitas.store');
Route::get('/visitas/{id}/edit', [VisitaController::class, 'edit'])->name('visitas.edit');
Route::put('/visitas/{id}/update', [VisitaController::class, 'update'])->name('visitas.update');
Route::delete('/visitas/{id}/delete', [VisitaController::class, 'destroy'])->name('visitas.destroy');

require __DIR__.'/auth.php';

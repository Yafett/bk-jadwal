<?php

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ! murid
Route::get('/murid', [App\Http\Controllers\MuridController::class, 'index'])->name('murid.home');
Route::get('/murid/jadwal/bulina', [App\Http\Controllers\MuridController::class, 'jadwalbulina'])->name('murid.jadwalbulina');
Route::get('/murid/jadwal/busarah', [App\Http\Controllers\MuridController::class, 'jadwalbusarah'])->name('murid.jadwalbusarah');
Route::post('/murid/reservasi/{id}', [App\Http\Controllers\MuridController::class, 'reservasi']);
Route::get('/murid/ikuti/{id}', [App\Http\Controllers\MuridController::class, 'ikuti']);

// ! guru
Route::get('/guru', [App\Http\Controllers\GuruController::class, 'index'])->name('guru.home');
Route::get('/guru/jadwal', [App\Http\Controllers\GuruController::class, 'jadwal'])->name('guru.jadwal');
Route::get('/guru/dashboard', [App\Http\Controllers\GuruController::class, 'dashboard'])->name('guru.dashboard');
Route::get('/guru/tambah', [App\Http\Controllers\GuruController::class, 'tambah'])->name('guru.tambah');
Route::post('/guru/store', [App\Http\Controllers\GuruController::class, 'store']);
Route::post('/guru/sudah/{id}', [App\Http\Controllers\GuruController::class, 'sudah']);
Route::post('/guru/batal/{id}', [App\Http\Controllers\GuruController::class, 'batal']);
Route::post('/guru/reschedule/{id}', [App\Http\Controllers\GuruController::class, 'reschedule']);


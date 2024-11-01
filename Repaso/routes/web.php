<?php

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
use App\Http\Controllers\LibroController;

Route::post('/libro', [LibroController::class, 'guardar'])->name('libro.guardar');


Route::view('/','principal')->name('rutaprincipal');
Route::view('/libro', 'libro')->name('rutalibro');
Route::post('/libro', [LibroController::class, 'guardar'])->name('guardar.libro');
Route::post('/libro', [LibroController::class, 'guardar'])->name('libro.guardar');

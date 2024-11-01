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

Route::get('/', function () {
    return view('inicio');
});
Route::get('/nuevo-paciente', function () {
    return view('nuevo_paciente');
})->name('nuevo.paciente');

Route::post('/guardar-paciente', [PacienteController::class, 'guardar'])->name('guardar.paciente');

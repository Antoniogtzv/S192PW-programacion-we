<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

route::get('/',[controladorVistas::class, 'home'])->name('rutainicio');

route::get('/formulario.',[controladorVistas::class, 'formulario'])->name('rutaform');

route::get('/clientes',[controladorVistas::class, 'consulta'])->name('rutaclientes');

route::post('/enviarCliente',[controladorVistas::class, 'procesarCliente'])->name('rutaEnviar');

Route::view('/componentes', 'componentes')->name('rutacomponentes');
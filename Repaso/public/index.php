<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

// Definir el inicio de Laravel
define('LARAVEL_START', microtime(true));

// Comprobar si la aplicación está en modo de mantenimiento
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Registrar el autoloader de Composer
require __DIR__ . '/../vendor/autoload.php';

// Ejecutar la aplicación
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Crear una instancia del kernel HTTP
$kernel = $app->make(Kernel::class);

// Capturar la solicitud y manejarla
$response = $kernel->handle(
    $request = Request::capture()
);

// Enviar la respuesta al navegador
$response->send();

// Terminar la aplicación
$kernel->terminate($request, $response);

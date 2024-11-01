<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Guarda un nuevo libro en la base de datos.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function guardar(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'isbn' => 'required|string|max:13', // Ajusta según el formato de ISBN
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'paginas' => 'required|integer|min:1',
            'anio' => 'required|integer|min:1000|max:' . date('Y'), // Asegurarse que el año es válido
            'editorial' => 'required|string|max:255',
            'email_editorial' => 'required|email', // Validar el formato del email
        ]);

        // Aquí deberías agregar la lógica para guardar el libro en la base de datos
        // Por ejemplo: Libro::create($validatedData);

        // Respuesta de éxito
        return response()->json(['message' => 'Registro guardado con éxito'], 200);
    }
}

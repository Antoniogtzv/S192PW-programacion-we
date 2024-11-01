<?php

namespace App\Http\Controllers;

use App\Models\Paciente; // Asegúrate de importar tu modelo de Paciente
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    // Método para mostrar la vista de nuevo paciente
    public function nuevo()
    {
        return view('nuevo_paciente');
    }

    // Método para guardar el paciente
    public function guardar(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email',
            'telefono' => 'required|string',
            'fecha_nacimiento' => 'required|date',
            'direccion' => 'required|string|max:255',
        ]);

        // Guardar el paciente en la base de datos
        Paciente::create($request->all());

        // Redirigir a una página de éxito o la vista que desees
        return redirect()->route('nuevo.paciente')->with('success', 'Paciente registrado exitosamente.');
    }
}

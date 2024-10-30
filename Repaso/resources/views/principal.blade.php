@extends('layouts.plantilla')

@section('title', 'Noticia Literaria')

@section('content')
    <!-- Contenido de la Noticia Literaria -->
    <div class="container my-4">
        <h1 class="text-center">Nueva Obra Maestra Literaria Lanzada</h1>
        <p>
            La biblioteca "Luz y Letras" se enorgullece en anunciar el lanzamiento de una nueva obra que cautivará
            a lectores de todas las edades. Este libro, escrito por el renombrado autor Juan Pérez, explora temas
            profundos de amor, pérdida y redención en un mundo imaginario fascinante.
        </p>
    </div>

    <!-- Pie de página -->
    <footer class="text-center mt-4 py-3 bg-light">
        <p>Biblioteca Luz y Letras © <span id="fecha"></span></p>
    </footer>
@endsection

@section('scripts')
    <!-- JavaScript para la Fecha Dinámica -->
    <script>
        const fecha = new Date();
        const opciones = { day: 'numeric', month: 'long', year: 'numeric' };
        document.getElementById('fecha').textContent = fecha.toLocaleDateString('es-ES', opciones);
    </script>
@endsection

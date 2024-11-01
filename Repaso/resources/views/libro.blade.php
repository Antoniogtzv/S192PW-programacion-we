@extends('layouts.plantilla')

@section('content')

@include('layouts.plantilla')

<form id="formLibro" method="POST" action="{{ route('libro.guardar') }}">
    @csrf <!-- Token de protección contra CSRF -->
    <div class="form-group">
        <label for="isbn">ISBN</label>
        <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Ingrese ISBN" required>
    </div>
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese título" required>
    </div>
    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" id="autor" name="autor" placeholder="Ingrese autor" required>
    </div>
    <div class="form-group">
        <label for="paginas">Páginas</label>
        <input type="number" class="form-control" id="paginas" name="paginas" placeholder="Ingrese número de páginas" required>
    </div>
    <div class="form-group">
        <label for="anio">Año</label>
        <input type="number" class="form-control" id="anio" name="anio" placeholder="Ingrese año" required>
    </div>
    <div class="form-group">
        <label for="editorial">Editorial</label>
        <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Ingrese editorial" required>
    </div>
    <div class="form-group">
        <label for="email_editorial">Email de Editorial</label>
        <input type="email" class="form-control" id="email_editorial" name="email_editorial" placeholder="Ingrese email de editorial" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar Libro</button>
</form>

<!-- AlertifyJS -->
<script src="https://cdn.jsdelivr.net/npm/alertifyjs/alertify.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs/build/css/alertify.min.css"/>

<script>
    document.getElementById('formLibro').onsubmit = function(event) {
        event.preventDefault(); // Evita que el formulario se envíe de la manera habitual

        // Enviar la petición
        fetch(this.action, {
            method: 'POST',
            body: new FormData(this),
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            // Muestra la alerta de éxito
            alertify.success('Registro guardado con éxito.');
        })
        .catch(error => {
            alertify.error('Error al guardar el registro'); // Muestra el mensaje de error
            console.error('Error:', error);
        });
    };
</script>

@endsection

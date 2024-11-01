@extends('layouts.plantilla')

@section('title', 'Noticia Literaria')

@section('content')
    <!-- Contenido de la Noticia Literaria -->
    <div class="container my-4">
        <h1 class="text-center">Las cinco lecturas recomendadas de Manuel Rivas, premio Nacional de las Letras</h1>

        <!-- Contenido de la noticia -->
        <p><strong>Literatura</strong><br>
        Manuel Rivas gana el Premio Nacional de las Letras 2024.<br>
        Silvia R. Pontevedra / Amalia Bulnes | Santiago / Sevilla | 29 oct 2024 - 06:53 CST<br>
        “Pocos autores del panorama español, partiendo de un compromiso firme con su lengua, han conseguido alcanzar tal reconocimiento a nivel mundial”, apunta el jurado sobre el escritor gallego.</p>

        <p><strong>CAFÉ PEREC</strong><br>
        Sospechosos no habituales<br>
        Enrique Vila-Matas | 28 oct 2024 - 22:18 CST<br>
        Volví a verme en París con Gennaro Serio, que en su novela ‘Notturno di Gibilterra’ me convirtió en un asesino. Nunca vislumbro el momento para preguntarle por qué me eligió.</p>

        <p><strong>EDITORIALES</strong><br>
        La Editorial Barcino cumple cien años con ganas de ofrecer un “clásico catalán” a cada lector<br>
        EFE | Barcelona | 28 oct 2024 - 16:13 CST<br>
        Sus responsables trabajan en nuevas maneras de hacer llegar los clásicos, con otros formatos, a través de medios audiovisuales, como los pódcast.</p>

        <p><strong>Crítica literaria</strong><br>
        ‘Un silencio lleno de murmullos’, de Gioconda Belli: placer y revolución<br>
        Berna González Harbour | 27 oct 2024 - 22:30 CST<br>
        La nueva novela de la autora nicaragüense es una biografía oculta de su vida y de medio siglo de historia calamitosa de su país.</p>

        <p><strong>FEDERICO GARCÍA LORCA</strong><br>
        La postal de Lorca que selló los días sevillanos en los que nació la generación del 27<br>
        Amalia Bulnes | Sevilla | 27 oct 2024 - 22:30 CST<br>
        La Universidad de Sevilla saca a la luz una misiva manuscrita del poeta granadino en la que describe la Fábrica de Tabacos de la ciudad como de una gracia “picassiana”, una de las primeras veces que se utiliza ese término.</p>

        <p><strong>Literatura</strong><br>
        Jugar a llegir Sally Rooney<br>
        Eudald Espluga | 27 oct 2024 - 22:06 CST<br>
        ‘Intermezzo’ és una llarga demostració del fet que el llenguatge desborda les paraules i els continguts mentals.</p>

        <p><strong>COLUMNA</strong><br>
        La metamorfosis de España<br>
        Luis García Montero | 27 oct 2024 - 22:00 CST<br>
        Despierto y mi país no es un escarabajo, como había sentido en el sueño intranquilo de la crispación.</p>

        <p><strong>Cartas a la directora</strong><br>
        Que todo salga a la luz<br>
        Cartas a la Directora | 27 oct 2024 - 22:00 CST<br>
        Los lectores escriben sobre los casos de abusos sexuales, la importancia del Me Too, las apariencias de la sociedad y la literatura en los planes de estudios.</p>
    </div>

    <!-- Pie de página -->
    <footer class="text-center mt-4 py-3 bg-light">
        <p>Biblioteca Luz y Letras © <span id="fecha"></span></p>
    </footer>
@endsection

@section('scripts')
    <!-- JavaScript para la Fecha Dinámica -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const fecha = new Date();
            const opciones = { day: 'numeric', month: 'long', year: 'numeric' };
            document.getElementById('fecha').textContent = fecha.toLocaleDateString('es-ES', opciones);
        });
    </script>
@endsection

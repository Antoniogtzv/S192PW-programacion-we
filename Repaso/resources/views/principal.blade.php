@extends('layouts.plantilla')

@section('title', 'Noticia Literaria')

@section('content')
    <!-- Contenido de la Noticia Literaria -->
    <div class="container my-4">
        <h1 class="text-center">Las cinco lecturas recomendadas de Manuel Rivas, premio Nacional de las Letras</h1>

        Literatura
<p>Manuel Rivas gana el Premio Nacional de las Letras 2024
Silvia R. Pontevedra / Amalia Bulnes | Santiago / Sevilla | 29 oct 2024 - 06:53 CST
“Pocos autores del panorama español, partiendo de un compromiso firme con su lengua, han conseguido alcanzar tal reconocimiento a nivel mundial”, apunta el jurado sobre el escritor gallego.
<p>

<p>CAFÉ PEREC
Sospechosos no habituales
Enrique Vila-Matas | 28 oct 2024 - 22:18 CST
Volví a verme en París con Gennaro Serio, que en su novela ‘Notturno di Gibilterra’ me convirtió en un asesino. Nunca vislumbro el momento para preguntarle por qué me eligió.
<p>

<p>EDITORIALES
La Editorial Barcino cumple cien años con ganas de ofrecer un “clásico catalán” a cada lector
EFE | Barcelona | 28 oct 2024 - 16:13 CST
Sus responsables trabajan en nuevas maneras de hacer llegar los clásicos, con otros formatos, a través de medios audiovisuales, como lo son los pódcast.
<p>
<p>Crítica literaria
‘Un silencio lleno de murmullos’, de Gioconda Belli: placer y revolución
Berna González Harbour | 27 oct 2024 - 22:30 CST
La nueva novela de la autora nicaragüense es una biografía oculta de su vida y de medio siglo de historia calamitosa de su país.
<p>
<p>FEDERICO GARCÍA LORCA
La postal de Lorca que selló los días sevillanos en los que nació la generación del 27
Amalia Bulnes | Sevilla | 27 oct 2024 - 22:30 CST
La Universidad de Sevilla saca a la luz una misiva manuscrita del poeta granadino en la que describe la Fábrica de Tabacos de la ciudad como de una gracia “picassiana”, una de las primeras veces que se utiliza ese término.
<p>
<p>Literatura
Jugar a llegir Sally Rooney
Eudald Espluga | 27 oct 2024 - 22:06 CST
‘Intermezzo’ és una llarga demostració del fet que el llenguatge desborda les paraules i els continguts mentals.
<p>
<p>COLUMNA
La metamorfosis de España
Luis García Montero | 27 oct 2024 - 22:00 CST
Despierto y mi país no es un escarabajo, como había sentido en el sueño intranquilo de la crispación.
<p>
Cartas a la directora
Que todo salga a la luz
Cartas a la Directora | 27 oct 2024 - 22:00 CST
Los lectores escriben sobre los casos de abusos sexuales, la importancia del Me Too, las apariencias de la sociedad y la literatura en los planes de estudios.
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

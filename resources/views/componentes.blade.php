
@extends('layouts.plantilla')

@section('titulo', 'Componentes')

@section('contenido')
   <x-Card encabezado="componente" titulo="dinamico" textoBoton="Enviar"> Soy el texto del primer componente  </x-Card>

   <x-Card encabezado="componente2" titulo="dinamico2" textoBoton="No Enviar"> Soy el texto del segundo componente  </x-Card>

   

<x-Alert tipo="success"> azul </x-Alert>
<x-Alert tipo="primary">verde </x-Alert>
<x-Alert tipo="danger"> rojo</x-Alert>


@endsection
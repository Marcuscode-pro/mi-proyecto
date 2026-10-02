@extends('layouts.plantilla')
@section('content')
    <h1 class="text-3xl font-bold">
        ¡Bienvenido, {{ Auth::user()->name }}!
    </h1>
    <p class="text-gray-600 mt-2">Panel de control de EjemploSeg</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6 w-full">
    {{-- Tarjeta 1: Total de Personas --}}
    <div class="bg-white rounded-lg shadow-sm p-6 border-l-4 border-blue-500">
        <h3 class="text-gray-500 text-sm mb-2">Total de Personas</h3>
        <p class="text-3xl font-bold text-gray-800">{{ $totalPersonas }}</p>
    </div>

    {{-- Tarjeta 2: Total de Intereses --}}
    <div class="bg-white rounded-lg shadow-sm p-6 border-l-4 border-green-500">
        <h3 class="text-gray-500 text-sm mb-2">Total de Intereses</h3>
        <p class="text-3xl font-bold text-gray-800">{{ $totalIntereses }}</p>
    </div>

    {{-- Tarjeta 3: Total de Usuarios --}}
    <div class="bg-white rounded-lg shadow-sm p-6 border-l-4 border-purple-500">
        <h3 class="text-gray-500 text-sm mb-2">Total de Usuarios</h3>
        <p class="text-3xl font-bold text-gray-800">{{ $totalUsuarios }}</p>
    </div>
</div>

</div>
@endsection
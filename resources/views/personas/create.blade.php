@extends('layouts.plantilla')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-sm border border-gray-100">
    <h2 class="text-2xl font-bold text-gray-800 mb-1">Crear Nueva Persona</h2>
    <p class="text-sm text-gray-500 mb-6">Ingresa los datos de la persona y selecciona sus intereses.</p>

    @if(session('success'))
        <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('personas.store') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
            <input type="text" name="nombre" id="nombre" required
                   class="w-full rounded-md border border-gray-300 p-2 shadow-sm focus:border-[#1a5632] focus:ring-[#1a5632] sm:text-sm"
                   placeholder="Ej. Juan Pérez">
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo Electrónico</label>
            <input type="email" name="email" id="email" required
                   class="w-full rounded-md border border-gray-300 p-2 shadow-sm focus:border-[#1a5632] focus:ring-[#1a5632] sm:text-sm"
                   placeholder="ejemplo@correo.com">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Intereses</label>
            <div class="grid grid-cols-2 gap-4 bg-gray-50 p-4 rounded-lg border border-gray-200">
                @forelse($intereses as $interes)
                    <label class="flex items-center space-x-2 text-sm text-gray-700 cursor-pointer">
                        <input type="checkbox" name="intereses[]" value="{{ $interes->id }}"
                               class="rounded border-gray-300 text-[#1a5632] focus:ring-[#1a5632]">
                        <span class="uppercase">{{ $interes->nombre }}</span>
                    </label>
                @empty
                    <p class="text-sm text-gray-500 col-span-2">No hay intereses registrados aún.</p>
                @endforelse
            </div>
        </div>

        <div class="flex justify-end space-x-3 pt-3">
            <a href="{{ route('dashboard') }}" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                Cancelar
            </a>
            <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#1a5632] hover:bg-[#144327]">
                Guardar Persona
            </button>
        </div>
    </form>
</div>
@endsection
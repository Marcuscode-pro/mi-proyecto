@extends('layouts.plantilla')

@section('content')
<div class="p-6 md:p-8 w-full max-w-3xl">
    
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Crear Nueva Persona</h1>
        <p class="text-sm text-gray-500 mt-1">Ingresa los datos de la persona y selecciona sus intereses.</p>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 md:p-8">
        
        <form action="#" method="POST" class="space-y-5">
            @csrf
            
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ej. Juan Pérez" 
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-[#1a5632] focus:border-[#1a5632] placeholder-gray-400">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" 
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-[#1a5632] focus:border-[#1a5632] placeholder-gray-400">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Intereses</label>
                <div class="border border-gray-200 rounded-lg p-4 bg-gray-50">
                    {{-- Aquí iterarías tus intereses reales con un foreach --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <label class="flex items-center space-x-2 text-sm text-gray-700 cursor-pointer">
                            <input type="checkbox" name="intereses[]" value="1" class="rounded border-gray-300 text-[#1a5632] focus:ring-[#1a5632]">
                            <span>MARCOS</span>
                        </label>
                        <label class="flex items-center space-x-2 text-sm text-gray-700 cursor-pointer">
                            <input type="checkbox" name="intereses[]" value="2" class="rounded border-gray-300 text-[#1a5632] focus:ring-[#1a5632]">
                            <span>LUCAS</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="pt-4 flex items-center space-x-3">
                <button type="submit" 
                    class="bg-[#1a5632] hover:bg-[#123d23] text-white font-medium py-2 px-4 rounded-lg text-sm transition-colors">
                    Guardar Persona
                </button>
                <button type="button" 
                    class="bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 font-medium py-2 px-4 rounded-lg text-sm transition-colors">
                    Cancelar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
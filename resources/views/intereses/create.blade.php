@extends('layouts.plantilla') {{-- Verifica que este sea el nombre de tu layout --}}

@section('content')
<div class="p-6 md:p-8 w-full max-w-3xl">
    
    {{-- Encabezado de la página --}}
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Registrar interés</h1>
        <p class="text-sm text-gray-500 mt-1">Agrega un nuevo interés para asignarlo a las personas.</p>
    </div>

    {{-- Tarjeta del Formulario --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 md:p-8">
        
        {{-- Recuerda colocar tu ruta correcta en el action --}}
    <form action="{{ route('intereses.store') }}" method="POST" class="space-y-5">
                @csrf
            
            {{-- Campo Nombre del Interés --}}
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre del interés</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ej. Inversiones" 
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-[#1a5632] focus:border-[#1a5632] placeholder-gray-400">
            </div>

            {{-- Campo Descripción --}}
            <div>
                <label for="descripcion" class="block text-sm font-medium text-gray-700 mb-1">Descripción (opcional)</label>
                <textarea id="descripcion" name="descripcion" rows="4" placeholder="Describe brevemente este interés..." 
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-[#1a5632] focus:border-[#1a5632] placeholder-gray-400 resize-y"></textarea>
            </div>

            {{-- Botones de Acción --}}
            <div class="pt-4 flex items-center space-x-3">
                <button type="submit" 
                    class="bg-[#1a5632] hover:bg-[#123d23] text-white font-medium py-2 px-4 rounded-lg text-sm transition-colors">
                    Guardar interés
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
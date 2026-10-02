@extends('layouts.plantilla')

@section('content')
<div class="p-6 md:p-8 w-full">
    
    <div class="mb-6 flex justify-between items-end">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Gestión de Usuarios</h1>
            <p class="text-sm text-gray-500 mt-1">Listado general de usuarios registrados en el sistema.</p>
        </div>
    </div>

    {{-- Tarjeta de la Tabla --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Registro</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    {{-- Ejemplo de fila (aquí va tu @foreach) --}}
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">MARCOS LUPA</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">marcosantoniolopez2007@gmail.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">01/10/2026 23:04</td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Marcos</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">marcosantonioloeze@gmail.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">02/10/2026 00:18</td>
                    </tr>
                     <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">DIEGO</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">marcos@lopez</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">01/10/2026 19:30</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
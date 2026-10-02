@extends('layouts.plantilla')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
    <h2 class="text-2xl font-bold text-gray-800 mb-1">Gestión de Usuarios</h2>
    <p class="text-sm text-gray-500 mb-6">Listado general de usuarios registrados en el sistema.</p>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NOMBRE</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">EMAIL</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">REGISTRO</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($usuarios as $usuario)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $usuario->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-800 uppercase">
                            {{ $usuario->name ?? $usuario->nombre }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $usuario->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $usuario->created_at?->format('d/m/Y H:i') }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-sm text-gray-500">No hay usuarios registrados en la base de datos.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
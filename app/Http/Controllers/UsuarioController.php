<?php

namespace App\Http\Controllers;

use App\Models\User; // Importante: traer el modelo de usuarios
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Muestra la lista de todos los usuarios registrados.
     */
    public function index()
    {
        // Obtiene todos los usuarios de la base de datos
        $usuarios = User::all();
        
        // Retorna la vista y le pasa la variable $usuarios
        return view('usuarios.index', compact('usuarios'));
    }

    // Aquí agregaremos más adelante los métodos para crear, editar y eliminar.
}
<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Interes; // 1. Agregamos la importación del modelo
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $intereses = Interes::all();
        // 2. Corregimos el error tipográfico: 'interses' -> 'intereses'
        return view('personas.create', compact('intereses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:personas',
            'intereses' => 'array',
        ]);

        $persona = Persona::create($request->only('nombre', 'email'));

        if ($request->has('intereses')) {
            $persona->intereses()->attach($request->intereses);
        }

        // 3. Cambiamos 'persona.create' a 'personas.create' (plural) 
        // ya que los controladores de recursos en Laravel usan plural por defecto.
        return redirect()->route('personas.create')
            ->with('success', 'Persona creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
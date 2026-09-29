<?php

namespace App\Http\Controllers;

use App\Models\Interes;
use Illuminate\Http\Request;

class InteresController extends Controller
{
    public function create()
    {
        return view('intereses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=> 'required|string|max:255',
            'descripcion' => 'nullable|string'
        ]);
        
        Interes::create($request->all());

        return redirect()
                ->route('intereses.create')
                ->with('success', ' Interes creado.');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interes extends Model
{
    // Asegúrate de que coincida con el nombre real de tu tabla en PostgreSQL
    protected $table = 'intereses'; 
    
    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    /**
     * Relación muchos a muchos (Inversa)
     * Un interés puede estar asociado a muchas personas.
     */
    public function personas()
    {
        return $this->belongsToMany(Persona::class, 'interes_persona');
    }
}
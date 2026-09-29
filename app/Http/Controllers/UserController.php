<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interes extends Model
{
    protected $table = 'intereses'; // Opcional si tu tabla ya se llama 'intereses'
    
    protected $fillable = [
        'nombre',
        'descripcion',
    ];
}
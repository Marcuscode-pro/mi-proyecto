<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Falta esta línea
use Illuminate\Database\Eloquent\Model;

class Interes extends Model
{
    use HasFactory;
    
    protected $table = 'intereses';

    protected $fillable = [
        'nombre',
        'descripcion',
    ];
}
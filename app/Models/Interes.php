<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interes extends Model
{
    use HasFactory;
    protected $filiable = ['nombre', 'descripcion'];
    public function personas ()
    { 
        return $this ->belongsToMany(Persona::class);
        }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactroy ;
    protected $filiable = ['nombre', 'email'];
    public function intereses ()
    { return $this ->belongsToMany(Intereses::class);
    }
}

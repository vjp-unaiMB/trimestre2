<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    public function materias() {
        return $this -> belongsToMany(Materia::class, 'alumno_materia');
    }
}

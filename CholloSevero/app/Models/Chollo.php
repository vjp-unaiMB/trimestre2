<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chollo extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'titulo', 'descripcion', 'url', 'categoria', 'puntuacion', 'precio', 'precio_descuento', 'disponible'];
}
// id único y autoincremental
// titulo un título para el chollo
// descripcion descripcion del chollo
// url un campo para introducir la URL externa del chollo
// categoria albergará la categoría de los chollos
// puntuacion un número entero que indique la puntuación del chollo
// precio para albergar el precio del chollo
// precio_descuento para albergar el nuevo precio
// disponible de tipo boolean
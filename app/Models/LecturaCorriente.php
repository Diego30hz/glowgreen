<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LecturaCorriente extends Model
{
    protected $table = 'lectura_corriente'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'min_amperaje', 'max_amperaje',
    ];

    // Puedes agregar más relaciones, mutadores, accesores y métodos personalizados según tus necesidades
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LecturaCorriente; // Importa el modelo LecturaCorriente

class SensorController extends Controller
{
    public function obtenerDatos()
    {
        // Consulta la base de datos para obtener los datos de min_amperaje y max_amperaje
        $lecturas = LecturaCorriente::select('min_amperaje', 'max_amperaje')->first(); // Suponemos que solo hay una fila

        return view('sensor.deigo', compact('lecturas'));
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Calificacion;
use App\Models\Contratoservicio;

use Illuminate\Http\Request;

class HistorialcalificacionesController extends Controller
{
    public function index()
    {
        $calificaciones = Calificacion::orderBy('idcalificacion', 'ASC')->paginate(5);


       return view ('historialcalificaciones.index', ['calificaciones' => $calificaciones]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalificacionesController extends Controller
{
    public function index()
    {
        return view ('calificaciones.index');
}
}
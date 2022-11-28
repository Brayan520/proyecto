<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogoservicioController extends Controller
{
    public function index()
    {
        return view ('catalogoservicio.index');
}
}

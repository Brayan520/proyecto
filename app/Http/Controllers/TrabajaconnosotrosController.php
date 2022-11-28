<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrabajaconnosotrosController extends Controller
{
    public function index()
    {
        return view ('trabajaconnosotros.index');
}
}

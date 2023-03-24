<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosadminController extends Controller
{
    public function index()
    {
        return view ('serviciosadmin.index');
}
}

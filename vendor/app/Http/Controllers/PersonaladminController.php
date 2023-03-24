<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaladminController extends Controller
{
    public function index()
    {
        return view ('personaladmin.index');
}
}

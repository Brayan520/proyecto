<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactanosUsuarioController extends Controller
{
    public function index()
    {
        return view ('contactanosusuario.index');
}
}

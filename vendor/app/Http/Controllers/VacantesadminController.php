<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacantesadminController extends Controller
{
    public function index()
    {
        return view ('vacantesadmin.index');
}
}

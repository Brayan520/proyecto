<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view ('index');
}
public function contactanos()
{
    return view ('index.contactanos');
}
public function quienessomos()
{
    return view ('index.quienessomos');
}

}
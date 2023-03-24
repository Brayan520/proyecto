<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function index()
    {

        $estados = Estado::orderBy('idestado', 'ASC')->paginate(5);


        return view ('estado.index', ['estados' => $estados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            ['tipo' => 'required|min:3|max:100|unique:estado']
        );

        Estado::create($request->all());
        return redirect()->route('estado.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Sexo  $sexo
     * @return \Illuminate\Http\Response
     */
    public function edit(Estado $estado)
    {
        return view('estado.edit', ['estado' => $estado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Sexo  $sexo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $estado)
    {
        $request->validate(
            ['tipo' => 'required|min:3|max:100|unique:estado']
        );

        $estado->update($request->all());
        return redirect()->route('estado.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Sexo  $sexo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estado $estado)
    {
        $estado->delete();
        return redirect()->route('estado.index');   
    }
}
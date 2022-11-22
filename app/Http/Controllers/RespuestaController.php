<?php

namespace App\Http\Controllers;

use App\Models\Respuesta;
use Illuminate\Http\Request;

class RespuestaController extends Controller
{
    public function index()
    {

        $respuestas = Respuesta::orderBy('idrespuesta', 'ASC')->paginate(5);


        return view ('respuesta.index', ['respuestas' => $respuestas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('respuesta.create');
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
            ['fecha' => 'required',
            'respuesta' => 'required|min:3|max:200|']
        );

        Respuesta::create($request->all());
        return redirect()->route('respuesta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Respuesta $respuestas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Sexo  $sexo
     * @return \Illuminate\Http\Response
     */
    public function edit(Respuesta $respuesta)
    {
        return view('respuesta.edit', ['respuesta' => $respuesta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Sexo  $sexo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Respuesta $respuesta)
    {
        $request->validate(
            ['fecha' => 'required',
            'respuesta' => 'required|min:3|max:200|']
        );

        $respuesta->update($request->all());
        return redirect()->route('respuesta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Sexo  $sexo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Respuesta $respuesta)
    {
        $respuesta->delete();
        return redirect()->route('respuesta.index');   
    }
}
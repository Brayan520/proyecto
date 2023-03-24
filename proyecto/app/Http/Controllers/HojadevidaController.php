<?php

namespace App\Http\Controllers;

use App\Models\Hojadevida;
use Illuminate\Http\Request;

class HojadevidaController extends Controller
{
    public function index()
    {
        $hojadevidas = Hojadevida::orderBy('idhojadevida', 'ASC')->paginate(5);


       return view ('hojadevida.index', ['hojadevidas' => $hojadevidas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function create()
    {

    return view ('hojadevida.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'=> 'required|min:2|max:100',
            'apellido'=> 'required|min:2|max:100',
            'tipoidentificacion'=> 'required|min:5|max:100',
            'identificacion'=> 'required|min:5|max:100|unique:hojadevida',
            'correo'=>'required|min:10|max:100|unique:hojadevida',
            'direccion'=> 'required|min:10|max:100',
            'barrio'=> 'required|min:10|max:100',
            'telefono'=> 'min:7|max:15|unique:hojadevida',
            'celular'=> 'required|max:15|unique:hojadevida',
            'ciudad',
            'estudios'=>'required|min:1|max:100',
            'fecharegistro'=> 'required'
       ]);
       Hojadevida::create($request->all());

       return redirect()->route('hojadevida.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacante  $vacantes
     * @return \Illuminate\Http\Response
     */
    public function show(Hojadevida $hojadevidas)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Vacante  $vacantes
     * @return \Illuminate\Http\Response
     */
    public function edit(Hojadevida $hojadevida)
    {   
    return view ('hojadevida.edit', ['hojadevida' => $hojadevida]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacante  $vacantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hojadevida $hojadevida)
    {
      $request->validate([
        'nombre'=> 'required|min:2|max:100',
            'apellido'=> 'required|min:2|max:100',
            'tipoidentificacion'=> 'required|min:5|max:100',
            'identificacion'=> 'required|min:5|max:100|unique:hojadevida',
            'correo'=>'required|min:10|max:100|unique:hojadevida',
            'direccion'=> 'required|min:10|max:100',
            'barrio'=> 'required|min:10|max:100',
            'telefono'=> 'min:7|max:15|unique:hojadevida',
            'celular'=> 'required|max:15|unique:hojadevida',
            'ciudad',
            'estudios'=>'required|min:1|max:100',
            'fecharegistro'=> 'required'
       ]);

      $hojadevida->update($request->all());
       return redirect()->route('hojadevida.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacante  $vacantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hojadevida $hojadevida)
    {
        $hojadevida->delete();
        return redirect()->route('hojadevida.index'); 
    }
}
$hojadevidas = Hojadevida::all()->pluck('nombre_apellido');
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
            'identificacion'=> 'required|min:5|max:100',
            'correo'=>'required|min:10|max:100',
            'direccion'=> 'required|min:10|max:100',
            'telefono'=> 'required|min:7|max:100',
            'fechanacimiento'=> 'required',
            'edad'=> 'required|min:2|max:2',
            'estudios'=>'required|min:1|max:100',
            'competencias'=> 'required|min:1|max:100',
            'experiencialaboral'=> 'required',
            'referencialaboral'=> 'required|min:1|max:100',
            'referenciapersonal'=>'required|min:1|max:100',
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
    return view ('hojadevida.edit');
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
     'identificacion'=> 'required|min:5|max:100',
     'correo'=>'required|min:10|max:100',
     'direccion'=> 'required|min:10|max:100',
     'telefono'=> 'required|min:7|max:100',
     'fechanacimiento'=> 'required',
     'edad'=> 'required|min:2|max:2',
     'estudios'=>'required|min:1|max:100',
     'competencias'=> 'required|min:1|max:100',
     'experiencialaboral'=> 'required',
     'referencialaboral'=> 'required|min:1|max:100',
     'referenciapersonal'=>'required|min:1|max:100',
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
        return back();
    }
}
$hojadevidas = Hojadevida::all()->pluck('nombre_apellido');
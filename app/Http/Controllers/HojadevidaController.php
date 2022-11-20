<?php

namespace App\Http\Controllers;

use App\Models\Hojadevida;
use Illuminate\Http\Request;

class HojadevidaController extends Controller
{
    public function index()
    {
        $vacantes = Vacante::orderBy('idvacante', 'ASC')->paginate(5);


       return view ('vacante.index', ['vacantes' => $vacantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function create()
    {
    $perfils  = Perfil::all();    
    $cargos  = Cargo::all();
    return view ('vacante.create',['perfils'=>$perfils, 'cargos'=>$cargos]);

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
       Vacante::create($request->all());

       return redirect()->route('vacante.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacante  $vacantes
     * @return \Illuminate\Http\Response
     */
    public function show(Vacante $vacantes)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Vacante  $vacantes
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacante $vacante)
    {   
    $perfils  = Perfil::all();    
    $cargos  = Cargo::all();
    return view ('vacante.edit',['vacante'=>$vacante, 'perfils'=>$perfils, 'cargos'=>$cargos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacante  $vacantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacante $vacante)
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

      $vacante->update($request->all());
       return redirect()->route('vacante.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacante  $vacantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacante $vacante)
    {
        $vacante->delete();
        return back();
    }
}
$hojadevidas = Hojadevida::all()->pluck('nombre_apellido');
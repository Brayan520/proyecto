<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use App\Models\Contratoservicio;
use Illuminate\Http\Request;

class CalificacionesController extends Controller
{
    public function index()
    {
        return view ('calificaciones.index');
}
public function create()
    {
    $contratoservicios  = Contratoservicio::all();
    return view ('calificaciones.create',['contratoservicios'=>$contratoservicios]);

    }

    public function store(Request $request)
    {
        $request->validate([
     'puntuacioncalificacion'=> 'required|min:1|max:3',
     'fechacalificacion'=> 'required',
     'observaciones',
     'idcontratoservicio'=> 'required|unique:calificaciones'
       ]);
       Calificacion::create($request->all());

       return redirect()->route('calificaciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calificacion  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Calificacion $calificaciones)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Calificacion  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Calificacion $calificacion)
    {   
    $contratoservicios  = Contratoservicio::all();    
    return view ('calificaciones.edit',['calificacion'=>$calificacion, 'contratoservicios'=>$contratoservicios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calificacion  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calificacion $calificacion)
    {
      $request->validate([
        'puntuacioncalificacion'=> 'required|min:1|max:3',
     'fechacalificacion'=> 'required',
     'observaciones',
     'idcontratoservicio'=> 'required|unique:calificaciones'
       ]);

      $calificacion->update($request->all());
       return redirect()->route('calificaciones.index');
    }
}
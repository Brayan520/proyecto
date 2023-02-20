<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use App\Models\Contratoservicio;
use Illuminate\Http\Request;

class CalificacionesadminController extends Controller
{
    public function index()
    {
        $calificaciones = Calificacion::orderBy('idcalificacion', 'ASC')->paginate(5);


       return view ('calificacion.index', ['calificaciones' => $calificaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function create()
    {
    $contratoservicios  = Contratoservicio::all();
    return view ('calificacion.create',['contratoservicios'=>$contratoservicios]);

    }

    public function store(Request $request)
    {
        $request->validate([
     'puntuacioncalificacion'=> 'required|min:1|max:3',
     'fechacalificacion'=> 'required',
     'observaciones',
     'idcontratoservicio'=> 'required'
       ]);
       Calificacion::create($request->all());

       return redirect()->route('calificacion.index');
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
    return view ('calificacion.edit',['calificacion'=>$calificacion, 'contratoservicios'=>$contratoservicios]);
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
     'idcontratoservicio'=> 'required'
       ]);

      $calificacion->update($request->all());
       return redirect()->route('calificacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calificacion  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calificacion $calificacion)
    {
        $calificacion->delete();
        return back();
    }
}
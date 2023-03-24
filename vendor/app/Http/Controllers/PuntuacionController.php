<?php

namespace App\Http\Controllers;

use App\Models\Puntuacion;
use App\Models\Entrevista;
use Illuminate\Http\Request;

class PuntuacionController extends Controller
{
    public function index()
    {
        $puntuaciones = Puntuacion::orderBy('idpuntuacion', 'ASC')->paginate(5);


       return view ('puntuacion.index', ['puntuaciones' => $puntuaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function create()
    {
    $entrevistas  = Entrevista::all();
    return view ('puntuacion.create',['entrevistas'=>$entrevistas]);

    }

    public function store(Request $request)
    {
        $request->validate([
     'puntuacioncalificacion'=> 'required|min:1|max:3',
     'fechapuntuacion'=> 'required',
     'observaciones',
     'identrevista'=> 'required'
       ]);
       Puntuacion::create($request->all());

       return redirect()->route('puntuacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calificacion  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Puntuacion $puntuaciones)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Calificacion  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Puntuacion $puntuacion)
    {   
    $entrevistas  = Entrevista::all();    
    return view ('puntuacion.edit',['puntuacion'=>$puntuacion, 'entrevistas'=>$entrevistas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calificacion  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Puntuacion $puntuacion)
    {
      $request->validate([
        'puntuacioncalificacion'=> 'required|min:1|max:3',
     'fechapuntuacion'=> 'required',
     'observaciones',
     'identrevista'=> 'required'
       ]);

      $puntuacion->update($request->all());
       return redirect()->route('puntuacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calificacion  $calificaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puntuacion $puntuacion)
    {
        $puntuacion->delete();
        return back();
    }
}
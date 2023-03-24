<?php

namespace App\Http\Controllers;

use App\Models\Postulacion;
use App\Models\Vacante;
use Illuminate\Http\Request;

class PostulacionController extends Controller
{
    public function index()
    {
        $postulaciones = Postulacion::orderBy('idpostulacion', 'ASC')->paginate(5);


       return view ('postulacion.index', ['postulaciones' => $postulaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function create()
    {
    $vacantes  = Vacante::all();
    return view ('postulacion.create',['vacantes'=>$vacantes]);

    }

    public function store(Request $request)
    {
        $request->validate([
     'fechapostulacion'=> 'required',
     'idvacante'=> 'required'
       ]);
       Postulacion::create($request->all());

       return redirect()->route('postulacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postulacion  $postulaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Vacante $vacantes)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Postulacion  $postulaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Postulacion $postulacion)
    {   
    $vacantes  = Vacante::all();    
    return view ('postulacion.edit',['postulacion'=>$postulacion, 'vacantes'=>$vacantes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Postulacion  $postulaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postulacion $postulacion)
    {
      $request->validate([
        'fechapostulacion'=> 'required',
     'idvacante'=> 'required'
       ]);

      $postulacion->update($request->all());
       return redirect()->route('postulacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postulacion  $postulaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postulacion $postulacion)
    {
        $postulacion->delete();
        return back();
    }
}
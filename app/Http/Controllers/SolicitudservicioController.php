<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudservicioController extends Controller
{
    public function index()
    {
        $solicitudservicios = Solicitudservicio::orderBy('idsolicitudservicio', 'ASC')->paginate(5);


       return view ('solicitudservicio.index', ['solicitudservicios' => $solicitudservicios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function create()
    {
    $solicitudservicios  = Solicitudservicio::all();
    return view ('solicitudservicio.create',['solicitudservicios'=>$solicitudservicios]);

    }

    public function store(Request $request)
    {
        $request->validate([
     'fechasolicitud'=> 'required',
     'idusuario'=> 'required'
       ]);
       Solicitudservicio::create($request->all());

       return redirect()->route('solicitudservicio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solicitudservicio  $solicitudservicios
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitudservicio $solicitudservicios)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Postulacion  $postulaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitudservicio $solicitudservicio)
    {   
    $users  = User::all();    
    return view ('solicitudservicio.edit',['solicitudservicio'=>$solicitudservicios, 'users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solicitudservicio  $solicitudservicios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitudservicio $solicitudservicio)
    {
      $request->validate([
        'fechasolicitud'=> 'required',
     'idusuario'=> 'required'
       ]);

      $solicitudservicio->update($request->all());
       return redirect()->route('solicitudservicio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solicitudservicio  $solicitudservicios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitudservicio $solicitudservicio)
    {
        $solicitudservicio->delete();
        return back();
    }
}
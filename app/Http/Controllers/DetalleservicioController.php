<?php

namespace App\Http\Controllers;

use App\Models\Detalleservicio;
use App\Models\Servicio;
use App\Models\Solicitudservicio;
use Illuminate\Http\Request;

class DetalleservicioController extends Controller
{
    public function index()
    {
        $detalleservicios = Detalleservicio::orderBy('iddetalleservicio', 'ASC')->paginate(5);


       return view ('detalleservicio.index', ['detalleservicios' => $detalleservicios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function create()
    {
    $solicitudservicios  = Solicitudservicio::all();
    $servicios  = Servicio::all();    
    return view ('detalleservicio.create',['solicitudservicios'=>$solicitudservicios, 'servicios'=>$servicios]);

    }

    public function store(Request $request)
    {
        $request->validate([
     'cantidadpersonal'=> 'required|min:1|max:100',
     'total'=> 'required|min:1|max:100',
     'idsolicitudservicio'=>'required',
     'idservicio'=> 'required'
       ]);
       Detalleservicio::create($request->all());

       return redirect()->route('detalleservicio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detalleservicio  $detalleservicios
     * @return \Illuminate\Http\Response
     */
    public function show(Detalleservicio $detalleservicios)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Detalleservicio  $detalleservicios
     * @return \Illuminate\Http\Response
     */
    public function edit(Detalleservicio $detalleservicio)
    {   
        $solicitudservicios  = Solicitudservicio::all();
        $servicios  = Servicio::all();    
    return view ('detalleservicio.edit',['detalleservicio'=>$detalleservicio, 'solicitudservicios'=>$solicitudservicios, 'servicios'=>$servicios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detalleservicio  $detalleservicios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detalleservicio $detalleservicio)
    {
      $request->validate([
        'cantidadpersonal'=> 'required|min:1|max:100',
     'total'=> 'required|min:1|max:100',
     'idsolicitudservicio'=>'required',
     'idservicio'=> 'required'
       ]);

      $detalleservicio->update($request->all());
       return redirect()->route('detalleservicio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detalleservicio  $detalleservicios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detalleservicio $detalleservicio)
    {
        $detalleservicio->delete();
        return back();
    }
}
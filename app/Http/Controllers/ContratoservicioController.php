<?php

namespace App\Http\Controllers;

use App\Models\Contratoservicio;
use App\Models\Solicitudservicio;
use Illuminate\Http\Request;

class ContratoservicioController extends Controller
{
    public function index()
    {
        $contratoservicios = Contratoservicio::orderBy('idcontratoservicio', 'ASC')->paginate(5);


       return view ('contratoservicio.index', ['contratoservicios' => $contratoservicios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function create()
    {
    $solicitudservicios  = Solicitudservicio::all();
    return view ('contratoservicio.create',['solicitudservicios'=>$solicitudservicios]);

    }

    public function store(Request $request)
    {
        $request->validate([
     'direccion'=> 'required|min:5|max:100',
     'fechainicial'=> 'required',
     'fechafinal'=> 'required',
     'idsolicitudservicio'=> 'required'
       ]);
       Contratoservicio::create($request->all());

       return redirect()->route('contratoservicio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contratoservicio  $contratoservicios
     * @return \Illuminate\Http\Response
     */
    public function show(Contratoservicio $contratoservicios)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Contratoservicio  $contratoservicios
     * @return \Illuminate\Http\Response
     */
    public function edit(Contratoservicio $contratoservicio)
    {   
    $solicitudservicios  = Solicitudservicio::all();    
    return view ('contratoservicio.edit',['contratoservicio'=>$contratoservicio, 'solicitudservicios'=>$solicitudservicios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contratoservicio  $contratoservicios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contratoservicio $contratoservicio)
    {
      $request->validate([
        'direccion'=> 'required|min:5|max:100',
        'fechainicial'=> 'required',
        'fechafinal'=> 'required',
        'idsolicitudservicio'=> 'required'
       ]);

      $contratoservicio->update($request->all());
       return redirect()->route('contratoservicio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contratoservicio  $contratoservicios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contratoservicio $contratoservicio)
    {
        $contratoservicio->delete();
        return back();
    }
}
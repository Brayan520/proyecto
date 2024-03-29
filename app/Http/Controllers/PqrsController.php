<?php

namespace App\Http\Controllers;

use App\Models\Pqrs;
use App\Models\Tipopqrs;
use App\Models\Estado;
use App\Models\Contratoservicio;
use App\Models\Respuesta;
use Illuminate\Http\Request;

class PqrsController extends Controller
{
        public function index()
        {
            return view ('pqrs.index');
    }
    public function create()
    {
    $tipopqrss  = Tipopqrs::all();    
    $estados  = Estado::all();
    $contratoservicios  = Contratoservicio::all();
    $respuestas  = Respuesta::all();

    return view ('pqrs.create',['tipopqrss'=>$tipopqrss, 'estados'=>$estados, 'contratoservicios'=>$contratoservicios, 'respuestas'=>$respuestas]);

    }

    public function store(Request $request)
    {
        $request->validate([
     'descripcion'=> 'required|min:10|max:200',
     'fecha'=> 'required',
     'idtipopqrs'=> 'required',
     'idestado'=>'required',
     'idcontratoservicio'=> 'required|unique:pqrs',
     'idrespuesta'
       ]);
       Pqrs::create($request->all());

       return redirect()->route('pqrs.index');
    }
    public function edit(Pqrs $pqr)
    {   
        $tipopqrss  = Tipopqrs::all();    
        $estados  = Estado::all();
        $contratoservicios  = Contratoservicio::all('fechainicial');
        $respuestas  = Respuesta::all();
    return view ('pqrs.edit',['pqr'=>$pqr, 'tipopqrss'=>$tipopqrss, 'estados'=>$estados, 'contratoservicios'=>$contratoservicios, 'respuestas'=>$respuestas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pqrs  $pqrss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pqrs $pqr)
    {
      $request->validate([
        'descripcion'=> 'required|min:1|max:200',
        'fecha'=> 'required',
        'idtipopqrs'=> 'required',
        'idestado'=>'required',
        'idcontratoservicio'=> 'required|unique:contratoservicio',
        'idrespuesta'=> 'required'
       ]);

      $pqr->update($request->all());
       return redirect()->route('pqrs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pqrs  $pqrss
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pqrs $pqr)
    {
        $pqr->delete();
        return redirect()->route('pqrs.index'); 
    }
}
    
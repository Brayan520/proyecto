<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use App\Models\Contratoservicio;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    public function index()
    {
        $colaboradores = Colaborador::orderBy('idcolaborador', 'ASC')->paginate(5);


       return view ('colaborador.index', ['colaboradores' => $colaboradores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function create()
    {
    $contratoservicios  = Contratoservicio::all();
    return view ('colaborador.create',['contratoservicios'=>$contratoservicios]);

    }

    public function store(Request $request)
    {
        $request->validate([
     'nombre'=> 'required',
     'apellido'=> 'required',
     'celular'=> 'required|unique:colaborador'
       ]);
       Colaborador::create($request->all());

       return redirect()->route('colaborador.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Colaborador  $colaboradores
     * @return \Illuminate\Http\Response
     */
    public function show(Colaborador $colaboradores)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Colaborador  $colaboradores
     * @return \Illuminate\Http\Response
     */
    public function edit(Colaborador $colaborador)
    {   
    $contratoservicios  = Contratoservicio::all();    
    return view ('colaborador.edit',['colaborador'=>$colaborador, 'contratoservicios'=>$contratoservicios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Colaborador  $colaboradores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Colaborador $colaborador)
    {
      $request->validate([
        'nombre'=> 'required',
        'apellido'=> 'required',
        'celular'=> 'required|unique:colaborador'
       ]);

      $colaborador->update($request->all());
       return redirect()->route('colaborador.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Colaborador  $colaboradores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colaborador $colaborador)
    {
        $colaborador->delete();
        return back();
    }
}
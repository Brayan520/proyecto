<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use App\Models\Cargo;
use App\Models\Vacante;
use Illuminate\Http\Request;

class VacanteController extends Controller
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
     'experiencia'=> 'required|min:1|max:100',
     'horario'=> 'required|min:1|max:100',
     'disponibilidad'=> 'required|min:1|max:100',
     'idperfil'=>'required',
     'idcargo'=> 'required'
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
        'experiencia'=> 'required|min:1|max:100',
        'horario'=> 'required|min:1|max:100',
        'disponibilidad'=> 'required|min:1|max:100',
        'idcargo'=> 'required',
        'idperfil'=> 'required'
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

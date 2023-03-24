<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use App\Models\Aspirante;
use App\Models\Contratacion;
use Illuminate\Http\Request;

class ContratacionController extends Controller
{
    public function index()
    {
        $contrataciones = Contratacion::orderBy('idcontratacion', 'ASC')->paginate(5);


       return view ('contratacion.index', ['contrataciones' => $contrataciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function create()
    {
    $colaboradores  = Colaborador::all();    
    $aspirantes  = Aspirante::all();
    return view ('contratacion.create',['colaboradores'=>$colaboradores, 'aspirantes'=>$aspirantes]);

    }

    public function store(Request $request)
    {
        $request->validate([
     'terminolaboral'=> 'required|min:5|max:100',
     'fechainicial'=> 'required',
     'fechafinal',
     'sueldo'=>'required',
     'idcolaborador'=> 'required',
     'idaspirante'=> 'required'
       ]);
       Contratacion::create($request->all());

       return redirect()->route('contratacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contratacion  $contrataciones
     * @return \Illuminate\Http\Response
     */
    public function show(Contratacion $contrataciones)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Contratacion  $contrataciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Contratacion $contratacion)
    {   
    $colaboradores  = Colaborador::all();    
    $aspirantes  = Aspirante::all();
    return view ('contratacion.edit',['contratacion'=>$contratacion, 'colaboradores'=>$colaboradores, 'aspirantes'=>$aspirantes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contratacion  $contrataciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contratacion $contratacion)
    {
      $request->validate([
        'terminolaboral'=> 'required|min:5|max:100',
     'fechainicial'=> 'required',
     'fechafinal',
     'sueldo'=>'required',
     'idcolaborador'=> 'required',
     'idaspirante'=> 'required'
       ]);

      $contratacion->update($request->all());
       return redirect()->route('contratacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contratacion  $contrataciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contratacion $contratacion)
    {
        $contratacion->delete();
        return back();
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colaborador;
use App\Models\Aspirante;
use App\Models\Hojadevida;
use App\Models\Contratacion;

class ContratacionadminController extends Controller
{
    public function index()
    {
        $contrataciones = Contratacion::orderBy('idcontratacion', 'ASC')->paginate(5);


       return view ('contratacionadmin.index', ['contrataciones' => $contrataciones]);
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
    return view ('contratacionadmin.create',['colaboradores'=>$colaboradores, 'aspirantes'=>$aspirantes]);

    }

    public function store(Request $request)
    {
        $request->validate([
       
     'terminolaboral'=> 'required|min:5|max:100',
     'fechainicial'=> 'required',
     'fechafinal',
     'sueldo'=>'required',
     'idcolaborador'=> 'required|unique:contratacion',
     'idaspirante'=> 'required|unique:contratacion'
       ]);
       Contratacion::create($request->all());

       return redirect()->route('contratacionadmin.index');
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
    return view ('contratacionadmin.edit',['contratacion'=>$contratacion, 'colaboradores'=>$colaboradores, 'aspirantes'=>$aspirantes]);
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
       return redirect()->route('contratacionadmin.index');
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

<?php

namespace App\Http\Controllers;

use App\Models\Postulacion;
use App\Models\Hojadevida;
use App\Models\Aspirante;
use Illuminate\Http\Request;

class AspiranteController extends Controller
{
    public function index()
    {
        $aspirantes = Aspirante::orderBy('idaspirante', 'ASC')->paginate(5);


       return view ('aspirante.index', ['aspirantes' => $aspirantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function create()
    {
    $postulaciones  = Postulacion::all();    
    $hojadevidas  = Hojadevida::all();
    return view ('aspirante.create',['postulaciones'=>$postulaciones, 'hojadevidas'=>$hojadevidas]);

    }

    public function store(Request $request)
    {
        $request->validate([
     'idhojadevida'=>'required',
     'idpostulacion'=> 'required'
       ]);
       Aspirante::create($request->all());

       return redirect()->route('aspirante.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aspirante  $aspirantes
     * @return \Illuminate\Http\Response
     */
    public function show(Aspirante $aspirantes)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Aspirante  $aspirantes
     * @return \Illuminate\Http\Response
     */
    public function edit(Aspirante $aspirante)
    {   
    $postulaciones  = Postulacion::all();    
    $hojadevidas  = Hojadevida::all();
    return view ('aspirante.edit',['aspirante'=>$aspirante, 'postulaciones'=>$postulaciones, 'hojadevidas'=>$hojadevidas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aspirante  $aspirantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aspirante $aspirante)
    {
      $request->validate([
     'idhojadevida'=>'required',
     'idpostulacion'=> 'required'
       ]);

      $aspirante->update($request->all());
       return redirect()->route('aspirante.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aspirante  $aspirantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aspirante $aspirante)
    {
        $aspirante->delete();
        return back();
    }
}
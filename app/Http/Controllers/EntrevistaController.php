<?php

namespace App\Http\Controllers;

use App\Models\Entrevista;
use App\Models\Aspirante;
use Illuminate\Http\Request;

class EntrevistaController extends Controller
{
    public function index()
    {
        $entrevistas = Entrevista::orderBy('identrevista', 'ASC')->paginate(5);


       return view ('entrevista.index', ['entrevistas' => $entrevistas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function create()
    {
    $aspirantes  = Aspirante::all();    
    return view ('entrevista.create',['aspirantes'=>$aspirantes]);

    }

    public function store(Request $request)
    {
        $request->validate([
     'nombreentrevistador'=> 'required|min:3|max:100',
     'tipoentrevista'=> 'required|min:5|max:100',
     'lugar'=> 'required|min:10|max:100',
     'fecha'=>'required',
     'hora'=> 'required',
     'idaspirante'=> 'required'
       ]);
       Entrevista::create($request->all());

       return redirect()->route('entrevista.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entrevista  $entrevistas
     * @return \Illuminate\Http\Response
     */
    public function show(Entrevista $entrevistas)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Entrevista  $entrevistas
     * @return \Illuminate\Http\Response
     */
    public function edit(Entrevista $entrevistum)
    {   
    $aspirantes  = Aspirante::all();    
    return view ('entrevista.edit',['entrevistum'=>$entrevistum, 'aspirantes'=>$aspirantes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entrevista  $entrevistas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrevista $entrevistum)
    {
      $request->validate([
        'nombreentrevistador'=> 'required|min:3|max:100',
     'tipoentrevista'=> 'required|min:5|max:100',
     'lugar'=> 'required|min:10|max:100',
     'fecha'=>'required',
     'hora'=> 'required',
     'idaspirante'
       ]);

      $entrevistum->update($request->all());
       return redirect()->route('entrevista.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entrevista  $entrevistas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrevista $entrevistum)
    {
        $entrevistum->delete();
        return back();
    }
}
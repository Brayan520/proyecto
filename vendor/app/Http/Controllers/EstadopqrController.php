<?php

namespace App\Http\Controllers;

use App\Models\Pqrs;
use App\Models\Tipopqrs;
use App\Models\Estado;
use App\Models\Contratoservicio;
use App\Models\Respuesta;
use Illuminate\Http\Request;

class EstadopqrController extends Controller
{
    public function index()
        {
            $pqrs = Pqrs::orderBy('idpqrs', 'ASC')->paginate(5);
    
    
           return view ('estadopqr.index', ['pqrs' => $pqrs]);
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
       
    
        public function create()
        {
        $tipopqrss  = Tipopqrs::all();    
        $estados  = Estado::all();
        $contratoservicios  = Contratoservicio::all();
        $respuestum  = Respuesta::all();

        return view ('estadopqr.create',['tipopqrss'=>$tipopqrss, 'estados'=>$estados, 'contratoservicios'=>$contratoservicios, 'respuestum'=>$respuestum]);
    
        }
    
        public function store(Request $request)
        {
            $request->validate([
         'descripcion'=> 'required|min:1|max:200',
         'fecha'=> 'required',
         'idtipopqrs'=> 'required',
         'idestado'=>'required',
         'idcontratoservicio'=> 'required',
         'idrespuesta'=> 'unique:pqrs'
           ]);
           Pqrs::create($request->all());
    
           return redirect()->route('estadopqr.index');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\Pqrs  $pqrss
         * @return \Illuminate\Http\Response
         */
        public function show(Pqrs $pqrs)
        {
            //
        }
    
        /**
        * Show the form for editing the specified resource.
        *
        * @param  \App\Models\Pqrs  $pqrss
         * @return \Illuminate\Http\Response
         */
        public function edit(Pqrs $pqrsadmin)
        {   
            $tipopqrss  = Tipopqrs::all();    
            $estados  = Estado::all();
            $contratoservicios  = Contratoservicio::all();
            $respuestum  = Respuesta::all();
        return view ('estadopqr.edit',['pqrsadmin'=>$pqrsadmin, 'tipopqrss'=>$tipopqrss, 'estados'=>$estados, 'contratoservicios'=>$contratoservicios, 'respuestum'=>$respuestum]);
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\Pqrs  $pqrss
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Pqrs $pqrsadmin)
        {
          $request->validate([
            'idestado'=>'required',
            'idrespuesta'=> 'unique:pqrs'
           ]);
    
          $pqrsadmin->update($request->all());
           return redirect()->route('estadopqr.index');
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Pqrs  $pqrss
         * @return \Illuminate\Http\Response
         */
        public function destroy(Pqrs $pqrsadmin)
        {
            $pqrsadmin->delete();
            return redirect()->route('estadopqr.index'); 
        }
    }
?>
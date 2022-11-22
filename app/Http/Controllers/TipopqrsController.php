<?php

namespace App\Http\Controllers;


use App\Models\Tipopqrs;
use Illuminate\Http\Request;

class TipopqrsController extends Controller
{
    public function index()
    {
        $tipopqrss = Tipopqrs::orderBy('idtipopqrs', 'ASC')->paginate(5);
        return view('tipopqrs.index', ['tipopqrss' => $tipopqrss]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipopqrs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
            'tipo' => 'required|min:3|max:200|unique:tipopqrs']
        );

        Tipopqrs::create($request->all());
        return redirect()->route('tipopqrs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Sexo  $sexo
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipopqrs $tipopqrs)
    {
        return view('tipopqrs.edit', ['tipopqrs' => $tipopqrs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Sexo  $sexo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipopqrs $tipopqrs)
    {
        $request->validate(
            [
                'tipo' => 'required|min:3|max:200|unique:tipopqrs']
        );

        $tipopqrs->update($request->all());
        return redirect()->route('tipopqrs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Sexo  $sexo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipopqrs $tipopqrs)
    {
        $tipopqrs->delete();
        return redirect()->route('tipopqrs.index');   
    }
}
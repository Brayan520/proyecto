<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductadminController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'ASC')->paginate(30);


       return view ('productadmin.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function create()
    {

    return view ('productadmin.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|min:2|max:100',
         
            'price',
          
            'details'=> 'required|min:5|max:100',
          
            'image_path'
       ]);
       Product::create($request->all());

       return redirect()->route('productadmin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacante  $vacantes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::find($id);
        dd($products);
        return view('productadmin.show', compact('products'));
        
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Vacante  $vacantes
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $products)
    {   
    return view ('productadmin.edit', ['products' => $products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacante  $vacantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $products)
    {
      $request->validate([
        'name'=> 'required|min:2|max:100',
        'slug'=> 'min:2|max:100',
        'details'=> 'min:5|max:100',
        'price',
        'shipping_cost',
        'description'=> 'required|min:5|max:100',
        'category_id',
        'brand_id',
        'image_path'
       ]);

      $products->update($request->all());
       return redirect()->route('productadmin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacante  $vacantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $products)
    {
        $products->delete();
        return back(); 
    }
}
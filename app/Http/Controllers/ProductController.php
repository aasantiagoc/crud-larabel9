<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$products = Product::all();
        return view('product.list', compact('products','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		$request->validate([
            'txtNombreProducto'=>'required',
            'txtTipoProducto'=> 'required',
            'txtPrecio' => 'required'
        ]);
 
        $product = new Product([
            'nombreproducto' => $request->get('txtNombreProducto'),
            'tipoproducto'=> $request->get('txtTipoProducto'),
            'precio'=> $request->get('txtPrecio')
        ]);
 
        $product->save();
        return redirect('/product')->with('success', 'Product has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
		return view('product.view',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
		return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
		$request->validate([
            'txtNombreProducto'=>'required',
            'txtTipoProducto'=> 'required',
            'txtPrecio' => 'required'
        ]);
 
 
        $product = Product::find($id);
        $product->nombreproducto = $request->get('txtNombreProducto');
        $product->tipoproducto = $request->get('txtTipoProducto');
        $product->precio = $request->get('txtPrecio');
 
        $product->update();
 
        return redirect('/product')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
		$product->delete();
        return redirect('/product')->with('success', 'Product deleted successfully');
    }
}

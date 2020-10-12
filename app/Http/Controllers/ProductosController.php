<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProductos()
    {
        $producto=Productos::all();
        return response()
        ->json($producto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createProductos(Request $request)
    {
        $produc=new Productos;
        $produc->Nombre=$request->Nombre;
        $produc->save();
        return '¡Producto Guardado!';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Relacion(Request $Nombre)
    {
        $produc=new Productos;
        $produc->Nombre;
        $products=productosperronesdb::table('productos')
        ->join('comentarios','comentarios.productos','=','productos.id','and','productos.Nombre','=',$produc)
        ->select('productos.Nombre','comentarios.Contenido');
        return $products;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(Productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $productos)
    {
        //
    }
}

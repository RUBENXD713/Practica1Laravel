<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;
//use productosperronesdb;
use Illuminate\Support\Facades\DB;

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
       
        $products=DB::table('productos')
        ->join('comentarios','comentarios.productos','=','productos.id')
        ->where('productos.nombre','=',$Nombre->Nombre)
        ->orWhere('productos.id','=',$Nombre->id)
        ->select('productos.Nombre','comentarios.Contenido')
        ->get();
        dd ($products);
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

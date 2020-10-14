<?php

namespace App\Http\Controllers;

use App\Comentarioss;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComentariossController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getComentario()
    {
        $comentario=Comentarioss::all();
        return response()
        ->json($comentario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nuevoComentario(Request $request)
    {
        $comentarios=new Comentarioss;
        $comentarios->Contenido=$request->Contenido;
        $comentarios->productos=$request->Producto;
        $comentarios->save();
        return '¡Comentario guardado Guardado!';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function comentarioProducto(Request $Nombre)
    {
        $products=DB::table('productos')
        ->join('comentarios','comentarios.productos','=','productos.id')
        ->where('productos.nombre','=',$Nombre->Producto)
        ->select('comentarios.id','comentarios.Contenido')
        ->get();
        dd ($products);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comentarioss  $comentarioss
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $products=DB::table('comentarios')
        ->from('comentarios')
        ->where('comentarios.id','=',$request->id)
        ->delete();
        return 'Eliminacion Exitosa!!';      
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comentarioss  $comentarioss
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentarioss $comentarioss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comentarioss  $comentarioss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comentarioss $comentarioss)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comentarioss  $comentarioss
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentarioss $comentarioss)
    {
        //
    }
}

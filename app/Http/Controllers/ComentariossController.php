<?php

namespace App\Http\Controllers;

use App\Comentarioss;
use Illuminate\Http\Request;

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
        $comentarios->save();
        return '¡Comentario guardado Guardado!';
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comentarioss  $comentarioss
     * @return \Illuminate\Http\Response
     */
    public function show(Comentarioss $comentarioss)
    {
        //
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoNegocio;

class tipoNegocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoNegocio = TipoNegocio::all(); //trae todo los tipo de negocios
        return $tipoNegocio;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipoNegocio = new TipoNegocio();
        $tipoNegocio->nombreValor = $request->nombreValor;

        $tipoNegocio->save();
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipoNegocio = TipoNegocio::findOrFail($request->id);
        $tipoNegocio->nombreValor = $request->nombreValor;
        $tipoNegocio->save();
        return $tipoNegocio;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoNegocio = TipoNegocio::destroy($request->id);
        return $tipoNgocio;
    }
}

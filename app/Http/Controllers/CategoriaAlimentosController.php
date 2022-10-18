<?php

namespace App\Http\Controllers;

use App\Models\CategoriaAlimento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriaAlimentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriaAlimentos = CategoriaAlimento::latest()->paginate(10);
        return [
            "status" => true,
            "message" => "Sí",
            "data" => $categoriaAlimentos
        ];
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
        $categoriaAlimentos = new CategoriaAlimento();
        $categoriaAlimentos->nombre = $request->nombre;
        $categoriaAlimentos->save();
        return [
            "status" => true,
            "message" => "Sí",
            "data" => $categoriaAlimentos
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoriaAlimento  $categoriaAlimento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return [
            "status" => true,
            "message" => "Sí",
            "data" => CategoriaAlimento::find($id)
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoriaAlimento  $categoriaAlimento
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoriaAlimento $categoriaAlimento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoriaAlimento  $categoriaAlimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $CategoriaAlimento = CategoriaAlimento::find($id);
        $CategoriaAlimento->update($request->all());
        return [
            "status" => true,
            "message" => "Sí",
            "data" => $CategoriaAlimento
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoriaAlimento  $categoriaAlimento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $CategoriaAlimento = CategoriaAlimento::find($id);
        $CategoriaAlimento->delete();
        return [
            "status" => true,
            "message" => "Sí",
            "data" => "$CategoriaAlimento",
        ];
    }
}

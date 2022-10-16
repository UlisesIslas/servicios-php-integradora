<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipios = Municipio::latest()->paginate(10);
        return [
            "status" => true,
            "message" => "Sí",
            "data" => $municipios
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
        $municipio = new Municipio();
        $municipio->nombre = $request->nombre;
        $municipio->save();
        return [
            "status" => true,
            "message" => "Sí",
            "data" => $municipio
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return [
            "status" => true,
            "message" => "Sí",
            "data" => $Municipio::find($id)
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function edit(Municipio $municipio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $municipio = Municipio::find($id);
        $municipio->update($request->all());
        return [
            "status" => true,
            "message" => "Sí",
            "data" => $municipio
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $municipio = Municipio::find($id);
        $municipio->delete();
        return [
            "status" => true,
            "message" => "Sí",
            "data" => "$municipio",
        ];
    }
}

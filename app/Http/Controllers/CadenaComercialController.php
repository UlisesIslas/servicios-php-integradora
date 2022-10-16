<?php

namespace App\Http\Controllers;

use App\Models\CadenaComercial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CadenaComercialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadenas = CadenaComercial::latest()->paginate(10);
        return [
            "status" => true,
            "message" => "Sí",
            "data" => $cadenas
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
        $cadena = new CadenaComercial();
        $cadena->nombre = $request->nombre;
        $cadena->estatus = true;
        $cadena->save();
        return [
            "status" => true,
            "message" => "Sí",
            "data" => $cadena
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CadenaComercial  $cadenaComercial
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return [
            "status" => true,
            "message" => "Sí",
            "data" => CadenaComercial::find($id)
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CadenaComercial  $cadenaComercial
     * @return \Illuminate\Http\Response
     */
    public function edit(CadenaComercial $cadenaComercial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CadenaComercial  $cadenaComercial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cadenaComercial = CadenaComercial::find($id);
        $cadenaComercial->update($request->all());
        return [
            "status" => true,
            "message" => "Sí",
            "data" => $cadenaComercial
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CadenaComercial  $cadenaComercial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cadenaComercial = CadenaComercial::find($id);
        $cadenaComercial->delete();
        return [
            "status" => true,
            "message" => "Sí",
            "data" => "$cadenaComercial",
        ];
    }
}

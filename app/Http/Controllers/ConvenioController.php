<?php

namespace App\Http\Controllers;

use App\Models\Convenio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConvenioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $convenios = Convenio::latest()->paginate(10);
        return [
            "status" => true,
            "message" => "Sí",
            "data" => $convenios
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
        $convenio = new Convenio();
        $convenio->municipio_id = $request->municipio_id;
        $convenio->cadena_comercial_id = $request->cadena_comercial_id;
        $convenio->save();
        return [
            "status" => true,
            "message" => "Sí",
            "data" => $convenio
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $convenio = Convenio::find($id);
        return [
            "status" => true,
            "message" => "Sí",
            "data" => $convenio::find($id)
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function edit(Convenio $convenio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $convenio = Convenio::find($id);
        $convenio->update($request->all());
        return [
            "status" => true,
            "message" => "Sí",
            "data" => $convenio
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Convenio  $convenio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $convenio = Convenio::find($id);
        $convenio->delete();
        return [
            "status" => true,
            "message" => "Sí",
            "data" => "$convenio",
        ];
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlimentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alimentos = Alimento::latest()->paginate(10);
        return [
            "status" => true,
            "message" => "Sí",
            "data" => $alimentos
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
        $alimentos = new Alimento();
        $alimentos->nombre = $request->nombre;
        $alimentos->save();
        return [
            "status" => true,
            "message" => "Sí",
            "data" => $alimentos
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return [
            "status" => true,
            "message" => "Sí",
            "data" => Alimento::find($id)
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function edit(Alimento $alimento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Alimento = Alimento::find($id);
        $Alimento->update($request->all());
        return [
            "status" => true,
            "message" => "Sí",
            "data" => $Alimento
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Alimento = Alimento::find($id);
        $Alimento->delete();
        return [
            "status" => true,
            "message" => "Sí",
            "data" => "$Alimento",
        ];
    }
}

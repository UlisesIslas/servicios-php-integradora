<?php

namespace App\Http\Controllers;

use App\Models\BancoAlimento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BancoAlimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bancos = BancoAlimento::latest()->paginate(10);
        return [
            "status" => true,
            "message" => "Sí",
            "data" => $bancos
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
        $banco = new BancoAlimento();
        $banco->name = $request->name;
        $banco->municipio_id = $request->municipio_id;
        $banco->save();
        return [
            "status" => true,
            "message" => "Sí",
            "data" => $banco
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BancoAlimento  $bancoAlimento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return [
            "status" => true,
            "message" => "Sí",
            "data" => BancoAlimento::find($id)
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BancoAlimento  $bancoAlimento
     * @return \Illuminate\Http\Response
     */
    public function edit(BancoAlimento $bancoAlimento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BancoAlimento  $bancoAlimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $banco = BancoAlimento::find($id);
        $banco->update($request->all());
        return [
            "status" => true,
            "message" => "Sí",
            "data" => $banco
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BancoAlimento  $bancoAlimento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banco = BancoAlimento::find($id);
        $banco->delete();
        return [
            "status" => true,
            "message" => "Sí",
            "data" => $banco
        ];
    }
}

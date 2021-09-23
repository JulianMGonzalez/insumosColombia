<?php

namespace App\Http\Controllers;

use App\Models\Movimiento;
use Illuminate\Http\Request;

class MovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimiento = Movimiento::all();

        return \response($movimiento);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            "tipo_mov" => "required",
            "cedula_mov" => "required",
            "nombre_mov" => "required",
            "valor_total_mov" => "required",
        ]);

        $movimiento = Movimiento::create($request->all());
        return \response($movimiento);
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
        $movimiento = Movimiento::findOrFail($id)->update($request->all());
        return \response($movimiento);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Movimiento::destroy($id);
        return \response(content: "El producto con el id: $id ha sido eliminada");
    }
}

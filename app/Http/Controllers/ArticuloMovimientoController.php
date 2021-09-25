<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleMovement;
use App\Models\ArticuloMovimiento;
use Illuminate\Http\Request;

class ArticuloMovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimiento = ArticleMovement::collection(ArticuloMovimiento::all());

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
            "id_mov" => "required",
            "id_producto" => "required",
        ]);

        $producto = new ArticleMovement(ArticuloMovimiento::create($request->all()));
        return \response($producto);
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
        $producto = ArticuloMovimiento::findOrFail($id)->update($request->all());
        return \response($producto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

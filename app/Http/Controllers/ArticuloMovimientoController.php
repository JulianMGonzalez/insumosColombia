<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleMovement;
use App\Models\ArticuloMovimiento;
use App\Models\Movimiento;
use App\Models\Producto;
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
        $productoMovimiento = new ArticleMovement(ArticuloMovimiento::create($request->all()));

        $movimiento = Movimiento::where('id',$productoMovimiento->id_mov)->first();
        $datos_producto= Producto::where('codigo_producto',$productoMovimiento->id_producto)->first();

        if($movimiento->tipo_mov == 0){
            $datos_producto->update([
                'costo_ultimo'=>$productoMovimiento->valor,
                'stock'=>$datos_producto->stock - $productoMovimiento->cantidad
            ]);
        }else{
            $datos_producto->update([
                'stock'=>$datos_producto->stock + $productoMovimiento->cantidad
            ]);
        }
        return \response($productoMovimiento);
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

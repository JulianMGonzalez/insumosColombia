<?php

namespace App\Http\Controllers;

use App\Models\Sublinea;
use Illuminate\Http\Request;

class SublineaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sublinea = Sublinea::all();

        return \response($sublinea);
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
            "codigo" => "required",
            "descripcion" => "required|max:256",
        ]);

        $sublinea = Sublinea::create($request->all());
        return \response($sublinea);
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
        $sublinea = Sublinea::findOrFail($id)->update($request->all());
        return \response($sublinea);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sublinea::destroy($id);
        return \response(content: "El producto con el id: $id ha sido eliminada");
    }
}

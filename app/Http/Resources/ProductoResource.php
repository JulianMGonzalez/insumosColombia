<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class ProductoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => Str::of($this->id),
            'codigo_producto' => Str::of($this->codigo_producto),
            'id_linea' => Str::of($this->id_linea),
            'id_sublinea' => Str::of($this->id_sublinea),
            'descripcion' => $this->descripcion,
            'costo_ultimo' => Str::of($this->costo_ultimo),
            'stock' => Str::of($this->stock),
            'created_at' => $this->created_at->format('d-m-Y')
        ];
    }
}

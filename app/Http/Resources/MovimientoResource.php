<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class MovimientoResource extends JsonResource
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
            'tipo_mov' => Str::of($this->tipo_mov),
            'cedula_mov' => Str::of($this->cedula_mov),
            'nombre_mov' => Str::of($this->nombre_mov),
            'valor_total_mov' => Str::of($this->valor_total_mov),
            'created_at' => $this->created_at->format('d-m-Y')
        ];
    }
}

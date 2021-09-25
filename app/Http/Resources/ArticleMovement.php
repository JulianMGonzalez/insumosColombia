<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class ArticleMovement extends JsonResource
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
            'id_mov' => Str::of($this->tipo_mov),
            'id_producto' => Str::of($this->id_producto),
            'cantidad' => Str::of($this->cantidad),
            'valor' => Str::of($this->valor),
            'created_at' => $this->created_at->format('d-m-Y')
        ];
    }
}

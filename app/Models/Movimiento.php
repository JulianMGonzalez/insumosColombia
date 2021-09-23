<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo_mov',
        'cedula_mov',
        'nombre_mov',
        'fecha_mov',
        'valor_total_mov'
    ];
    public function articulo(){

        return $this->hasOne('App\Models\ArticuloMovimiento');
    }
}

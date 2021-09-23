<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticuloMovimiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_mov',
        'id_producto',
        'cantidad',
        'valor',
    ];
    public function movimiento(){

        return $this->belongsTo('App\Models\Movimiento');
    }
}

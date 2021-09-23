<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo_producto',
        'id_linea',
        'id_sublinea',
        'descripcion',
        'costo_ultimo',
        'stock'

    ];

    public function idlinea(){
        return $this->belongsTo('App\Models\Linea');
    }
    public function idsublinea(){
        return $this->belongsTo('App\Models\Sublinea');
    }
    public function costo(){
        return $this->hasMany('App\Models\ArticuloMovimiento');
    }
}

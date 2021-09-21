<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linea extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo',
        'descripcion'

    ];

    //Relacion uno a muchos
    public function idlineas(){
        return $this->hasMany('App\Models\Producto');
    }
}

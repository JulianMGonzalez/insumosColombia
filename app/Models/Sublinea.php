<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sublinea extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo',
        'descripcion'

    ];

    //relacion uno a muchos
    public function idsublineas(){
        return $this->hasMany('App\Models\Producto');
    }
}

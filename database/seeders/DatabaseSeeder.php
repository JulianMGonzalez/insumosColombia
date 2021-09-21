<?php

namespace Database\Seeders;

use App\Models\Linea;
use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\Sublinea;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $linea = new Linea();

        $linea->codigo=10;
        $linea->descripcion="Los mejores granos de Colombia";
        $linea->save();

        $sublinea = new Sublinea();

        $sublinea->codigo=05;
        $sublinea->descripcion="Los mejores granos de la Granja Marta martinez";
        $sublinea->save();
        

        $producto = new Producto();
        $producto->codigo_producto=101005;
        $producto->id_linea=10;
        $producto->id_sublinea=05;
        $producto->descripcion="Frijoles de Boyacá";
        $producto->costo_ultimo = 2500;
        $producto->stock = 122;
        $producto->save();
    }
}

<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "codigo_producto" => $this->faker->unique()->randomNumber($nbDigits = 6),
            "id_linea" => $this->faker->randomNumber($nbDigits = 6),
            "id_sublinea" => $this->faker->randomNumber($nbDigits = 6), 
            "descripcion" => $this->faker->paragraph(), 
            "costo_ultimo" => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000000), 
            "stock" => $this->faker->numberBetween($int1 = 1, $int2 = 100),
        ];
    }
}

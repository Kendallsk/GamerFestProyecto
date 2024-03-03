<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoriaFactory extends Factory
{
    protected $model = Categoria::class;

    public function definition()
    {
        return [
			'tipo_cat' => $this->faker->name,
			'num_jug_cat' => $this->faker->name,
			'descripcion_cat' => $this->faker->name,
        ];
    }
}

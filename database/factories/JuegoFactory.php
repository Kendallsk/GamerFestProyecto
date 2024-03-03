<?php

namespace Database\Factories;

use App\Models\Juego;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JuegoFactory extends Factory
{
    protected $model = Juego::class;

    public function definition()
    {
        return [
			'id_aul' => $this->faker->name,
			'id_cat' => $this->faker->name,
			'nombre_jue' => $this->faker->name,
			'compania_jue' => $this->faker->name,
			'precio_jue' => $this->faker->name,
			'descripcion_jue' => $this->faker->name,
        ];
    }
}

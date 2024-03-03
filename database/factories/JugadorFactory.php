<?php

namespace Database\Factories;

use App\Models\Jugador;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JugadorFactory extends Factory
{
    protected $model = Jugador::class;

    public function definition()
    {
        return [
			'id_equ' => $this->faker->name,
			'nombre_jug' => $this->faker->name,
			'cedula_jug' => $this->faker->name,
			'telefono_jug' => $this->faker->name,
			'correo_jug' => $this->faker->name,
			'descripcion_jug' => $this->faker->name,
        ];
    }
}

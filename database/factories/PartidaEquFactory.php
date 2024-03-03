<?php

namespace Database\Factories;

use App\Models\PartidaEqu;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PartidaEquFactory extends Factory
{
    protected $model = PartidaEqu::class;

    public function definition()
    {
        return [
			'id_equ1' => $this->faker->name,
			'id_equ2' => $this->faker->name,
			'ganador_par_equ' => $this->faker->name,
			'fecha_par_equ' => $this->faker->name,
			'observacion_par_equ' => $this->faker->name,
        ];
    }
}

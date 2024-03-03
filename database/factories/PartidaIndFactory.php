<?php

namespace Database\Factories;

use App\Models\PartidaInd;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PartidaIndFactory extends Factory
{
    protected $model = PartidaInd::class;

    public function definition()
    {
        return [
			'id_jug1' => $this->faker->name,
			'id_jug2' => $this->faker->name,
			'ganador_par_ind' => $this->faker->name,
			'fecha_par_ind' => $this->faker->name,
			'observacion_par_ind' => $this->faker->name,
        ];
    }
}

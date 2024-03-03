<?php

namespace Database\Factories;

use App\Models\Horario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class HorarioFactory extends Factory
{
    protected $model = Horario::class;

    public function definition()
    {
        return [
			'id_jue' => $this->faker->name,
			'hora_ini_hor' => $this->faker->name,
			'hora_fin_hor' => $this->faker->name,
			'observacion_hor' => $this->faker->name,
        ];
    }
}

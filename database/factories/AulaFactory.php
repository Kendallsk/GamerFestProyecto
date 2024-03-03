<?php

namespace Database\Factories;

use App\Models\Aula;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AulaFactory extends Factory
{
    protected $model = Aula::class;

    public function definition()
    {
        return [
			'codigo_aul' => $this->faker->name,
			'edificio_aul' => $this->faker->name,
			'observacion_aul' => $this->faker->name,
        ];
    }
}

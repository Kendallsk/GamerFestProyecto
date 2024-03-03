<?php

namespace Database\Factories;

use App\Models\InscripcionEqu;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InscripcionEquFactory extends Factory
{
    protected $model = InscripcionEqu::class;

    public function definition()
    {
        return [
			'id_equ' => $this->faker->name,
			'id_jue' => $this->faker->name,
			'precio_ins_equ' => $this->faker->name,
			'pago_ins_equ' => $this->faker->name,
        ];
    }
}

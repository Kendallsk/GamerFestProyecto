<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Jugador;
class JugadorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

            'id_equ' => $this->id_equ,
            'nombre_jug' => $this->nombre_jug,
            'cedula_jug' => $this->cedula_jug,
            'telefono_jug' => $this->telefono_jug,
            'correo_jug' => $this->correo_jug,
            'descripcion_jug' => $this->descripcion_jug,
        ];
    }
}

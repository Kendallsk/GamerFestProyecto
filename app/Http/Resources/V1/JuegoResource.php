<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class JuegoResource extends JsonResource
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
            'id_jue' => $this->id,
            'nombre_jue' => $this->nombre_jue,
            'nombre_cat' => $this->tipo_cat,
            'compania_jue' => $this->compania_jue,
            'descripcion_jue' => $this->descripcion_jue,

        ];
    }
}

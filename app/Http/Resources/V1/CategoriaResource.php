<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Categoria;
class CategoriaResource extends JsonResource
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
            'tipo_cat' => $this->tipo_cat,
            'numero_jugadores' => $this->num_jug_cat,
            'descripcion' =>$this->descripcion_cat,

        ];
    }
}

<?php

namespace App\Http\Resources\V1;
use App\Models\Aula;
use Illuminate\Http\Resources\Json\JsonResource;

class AulaResource extends JsonResource
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
            'codigo_aul' => $this->codigo_aul,
            'observacion_aul' => $this->observacion_aul,
        ];
    }
}

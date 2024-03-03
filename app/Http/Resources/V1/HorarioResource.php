<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Horario;
class HorarioResource extends JsonResource
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
            'nombre_jue' => $this->nombre_jue,
            'hora_inicio' => $this->hora_ini_hor,
            'hora_final' => $this->hora_fin_hor,

            'observacion_hor' => $this->observacion_hor,
        ];
    }
}

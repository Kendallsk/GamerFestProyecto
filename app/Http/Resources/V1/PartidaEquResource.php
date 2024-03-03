<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\PartidaEqu;

class PartidaEquResource extends JsonResource
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
            'equipo1'=>$this->equipo1,
            'equipo2'=>$this->equipo2,
            'ganador'=>$this->equipo3,
            'observacion' => $this->observacion_par_equ
        ];
    }
}

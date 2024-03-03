<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class PartidaIndResource extends JsonResource
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
            'jugador1'=>$this->jugadors1,
            'jugador2'=>$this->jugadors2,
            'ganador'=>$this->jugadors3,
            'observacion' => $this->observacion_par_ind
        ];
    }
}

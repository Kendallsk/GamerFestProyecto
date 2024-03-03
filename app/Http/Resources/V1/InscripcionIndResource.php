<?php

namespace App\Http\Resources\V1;
use App\Models\InscripcionInd;
use Illuminate\Http\Resources\Json\JsonResource;

class InscripcionIndResource extends JsonResource
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
            'total' => $this->total,
        ];
    }
}

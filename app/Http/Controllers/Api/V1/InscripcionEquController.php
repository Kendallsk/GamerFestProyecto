<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\InscripcionEquResource;
use App\Http\Controllers\Controller;
use App\Models\InscripcionEqu;
use Illuminate\Http\Request;

class InscripcionEquController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return InscripcionEquResource::collection(InscripcionEqu :: select('juegos.nombre_jue', InscripcionEqu::raw('count(*) as total'))
        ->join('juegos','inscripcion__equs.id_jue', '=', 'juegos.id')
        ->groupBy('juegos.nombre_jue')
        ->get())->additional(['recaudacion' => InscripcionEqu::sum('precio_ins_equ')]);

    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InscripcionEqu  $inscripcionEqu
     * @return \Illuminate\Http\Response
     */
    public function show(InscripcionEqu $inscripcionEqu)
    {
        return new toArray($inscripcionEqu);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InscripcionEqu  $inscripcionEqu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InscripcionEqu $inscripcionEqu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InscripcionEqu  $inscripcionEqu
     * @return \Illuminate\Http\Response
     */
    public function destroy(InscripcionEqu $inscripcionEqu)
    {
        if($inscripcionEqu->delete()){
            return response()->json([
                'message' => 'Success'
            ],204);
        }
        return response()->json([
            'message' => 'Not found'
        ],404);
    }
}

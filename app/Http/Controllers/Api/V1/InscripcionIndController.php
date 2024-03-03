<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Resources\V1\InscripcionIndResource;
use App\Http\Controllers\Controller;
use App\Models\InscripcionInd;
use Illuminate\Http\Request;

class InscripcionIndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return InscripcionIndResource::collection(InscripcionInd :: select('juegos.nombre_jue', InscripcionInd::raw('count(*) as total'))
        ->join('juegos','inscripcion__inds.id_jue', '=', 'juegos.id')
        ->groupBy('juegos.nombre_jue')
        ->get())->additional(['recaudacion' => InscripcionInd::sum('precio_ins')]);
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
     * @param  \App\Models\InscripcionInd  $inscripcionInd
     * @return \Illuminate\Http\Response
     */
    public function show(InscripcionInd $inscripcionInd)
    {
        return new InscripcionIndResource($inscripcionInd);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InscripcionInd  $inscripcionInd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InscripcionInd $inscripcionInd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InscripcionInd  $inscripcionInd
     * @return \Illuminate\Http\Response
     */
    public function destroy(InscripcionInd $inscripcionInd)
    {
        if($inscripcionInd->delete()){
            return response()->json([
                'message' => 'Success'
            ],204);
        }
        return response()->json([
            'message' => 'Not found'
        ],404);
    }
}

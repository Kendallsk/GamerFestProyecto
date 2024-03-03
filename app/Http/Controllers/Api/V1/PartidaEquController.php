<?php

namespace App\Http\Controllers\Api\V1;


use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PartidaEquResource;
use App\Models\PartidaEqu;
use Illuminate\Http\Request;

class PartidaEquController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PartidaEquResource::collection(PartidaEqu::with('equipo1:id,nombre_equ as equipo1')
        ->with('equipo2:id,nombre_equ as equipo2')
        ->with('equipo3:id,nombre_equ as equipo3')
->get());
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
     * @param  \App\Models\PartidaEqu  $partidaEqu
     * @return \Illuminate\Http\Response
     */
    public function show(PartidaEqu $partidaEqu)
    {
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PartidaEqu  $partidaEqu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PartidaEqu $partidaEqu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PartidaEqu  $partidaEqu
     * @return \Illuminate\Http\Response
     */
    public function destroy(PartidaEqu $partidaEqu)
    {
        if($partidaEqu->delete()){
            return response()->json([
                'message' => 'Success'
            ],204);
        }
        return response()->json([
            'message' => 'Not found'
        ],404);
    }
}

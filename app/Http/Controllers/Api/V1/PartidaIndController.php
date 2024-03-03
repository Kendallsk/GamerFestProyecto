<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PartidaIndResource;
use App\Models\PartidaInd;
use Illuminate\Http\Request;

class PartidaIndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PartidaIndResource::collection(PartidaInd::with('jugadors1:id,nombre_jug as jugadors1')
        ->with('jugadors2:id,nombre_jug as jugadors2')
        ->with('jugadors3:id,nombre_jug as jugadors3')
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
     * @param  \App\Models\PartidaInd  $partidaInd
     * @return \Illuminate\Http\Response
     */
    public function show(PartidaInd $partidaInd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PartidaInd  $partidaInd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PartidaInd $partidaInd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PartidaInd  $partidaInd
     * @return \Illuminate\Http\Response
     */
    public function destroy(PartidaInd $partidaInd)
    {
        if($partidaInd->delete()){
            return response()->json([
                'message' => 'Success'
            ],204);
        }
        return response()->json([
            'message' => 'Not found'
        ],404);
    }
}

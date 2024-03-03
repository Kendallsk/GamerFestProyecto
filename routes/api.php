<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\AulaController as AulaV1;
use App\Http\Controllers\Api\V1\HorarioController as HorarioV1;
use App\Http\Controllers\Api\V1\JuegoController as JuegoV1;
use App\Http\Controllers\Api\V1\EquipoController as EquipoV1;
use App\Http\Controllers\Api\V1\JugadorController as JugadorV1;
use App\Http\Controllers\Api\V1\PartidaEquController as PartidaEquV1;
use App\Http\Controllers\Api\V1\PartidaIndController as PartidaIndV1;
use App\Http\Controllers\Api\V1\CategoriaController as CategoriaV1;
use App\Http\Controllers\Api\V1\InscripcionIndController as InscripcionIndV1;
use App\Http\Controllers\Api\V1\InscripcionEquController as InscripcionEquV1;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('login', [App\Http\Controllers\Api\LoginController::class, 'login']);

Route::apiResource('v1/aulas', AulaV1::class)
      ->only(['index','show', 'destroy'])
      ->middleware('auth:sanctum');

Route::apiResource('v1/inscripcionInds', InscripcionIndV1::class)
      ->only(['index','show', 'destroy'])
      ->middleware('auth:sanctum');

Route::apiResource('v1/inscripcionEqus', InscripcionEquV1::class)
      ->only(['index','show', 'destroy'])
      ->middleware('auth:sanctum');

Route::apiResource('v1/horarios', HorarioV1::class)
      ->only(['index','show', 'destroy'])
      ->middleware('auth:sanctum');
      
Route::apiResource('v1/juegos', JuegoV1::class)
      ->only(['index','show', 'destroy'])
      ->middleware('auth:sanctum');

Route::apiResource('v1/equipos', EquipoV1::class)
      ->only(['index','show','update', 'destroy'])
      ->middleware('auth:sanctum');

Route::apiResource('v1/jugadores', JugadorV1::class)
      ->only(['index','show', 'destroy'])
      ->middleware('auth:sanctum');

Route::apiResource('v1/partidasEqu', PartidaEquV1::class)
      ->only(['index','show', 'destroy'])
      ->middleware('auth:sanctum');

Route::apiResource('v1/partidasInd', PartidaIndV1::class)
      ->only(['index','show', 'destroy'])
      ->middleware('auth:sanctum');
      
Route::apiResource('v1/categorias', CategoriaV1::class)
      ->only(['index','show', 'destroy'])
      ->middleware('auth:sanctum');



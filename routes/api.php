<?php

use App\Http\Controllers\ArticuloMovimientoController;
use App\Http\Controllers\LineaController;
use App\Http\Controllers\MovimientoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SublineaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource(name: 'productos', controller: ProductoController::class);
Route::apiResource(name: 'linea', controller: LineaController::class);
Route::apiResource(name: 'sublinea', controller: SublineaController::class);
Route::apiResource(name: 'movimiento', controller: MovimientoController::class);
Route::apiResource(name: 'articulo-movimiento', controller: ArticuloMovimientoController::class);
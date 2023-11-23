<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PersonaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|asasasas

pruebaaaaaaaaaaaaaaa
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1/personas')->group(function () { 
    Route::get('/',[ PersonaController::class, 'get']);
    Route::post('/',[ PersonaController::class, 'create']);
    Route::get('/{id}',[ PersonaController::class, 'getById']);
 });
 
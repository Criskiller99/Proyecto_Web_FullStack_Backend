<?php

use App\Http\Controllers\Api\ContactoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post("/crearUsuarios",[ContactoController::class,'create']);
Route::get("/verUsuarios",[ContactoController::class,'read']);
Route::put("/actualizarUsuarios",[ContactoController::class,'update']);
Route::delete("/borrarUsuarios",[ContactoController::class,'delete']);

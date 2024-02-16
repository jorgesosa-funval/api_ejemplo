<?php

use App\Http\Controllers\CarroController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/', [CarroController::class, 'index']);
Route::get('/carro/{id}', [CarroController::class, 'show']);
Route::post('/carro', [CarroController::class, 'store']);
Route::put('/carro/{id}', [CarroController::class, 'update']);
Route::delete('/carro/{id}', [CarroController::class, 'destroy']);

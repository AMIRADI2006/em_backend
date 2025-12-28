<?php

use Illuminate\Http\Request;
use App\Http\Controllers\TrainsController;
use App\Http\Controllers\WagonsController;
use App\Http\Controllers\CargosController;
use App\Http\Controllers\WalletsController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\ReturnsController;

Route::post('/trains', [TrainsController::class, 'store']);
Route::post('/wagons', [WagonsController::class, 'store']);
Route::post('/cargos', [CargosController::class, 'store']);


Route::post('/reservations', [ReservationsController::class, 'store']);

Route::post('/wallets/{id}/credit', [WalletsController::class, 'credit']);
Route::post('/wallets/{id}/debit', [WalletsController::class, 'debit']);

Route::post('/returns', [ReturnsController::class, 'store']);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

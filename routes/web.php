<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DroneController;



Route::get('/drones', [DroneController::class, 'index']);
Route::post('/drones', [DroneController::class, 'store']);
Route::get('/drones/{id}', [DroneController::class, 'show']);
Route::put('/drones/{id}', [DroneController::class, 'update']);
Route::delete('/drones/{id}', [DroneController::class, 'destroy']);

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('computers', ComputerController::class);

Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);

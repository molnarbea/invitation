<?php

use App\Http\Controllers\TraderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/traders',[TraderController::class,'index']);
Route::get('/traders/{trader}',[TraderController::class,'show']);

Route::put('/traders/{trader}',[TraderController::class,'update']);
Route::post('/traders',[TraderController::class,'store']);
Route::delete('/traders/{trader}',[TraderController::class,'destroy']);

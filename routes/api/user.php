<?php
use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;

Route::get('', [UserController::class , 'index']);
Route::post('', [UserController::class , 'store']);
Route::get('/{id}', [UserController::class , 'show']);
Route::post('/{id}', [UserController::class , 'update']);
Route::delete('/{id}', [UserController::class , 'destroy']);
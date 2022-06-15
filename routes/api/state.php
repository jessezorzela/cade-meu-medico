<?php
use Illuminate\Support\Facades\Route;
use App\http\Controllers\StateController;

Route::get('', [StateController::class , 'index']);
Route::post('', [StateController::class , 'store']);
Route::post('states', [StateController::class , 'storeArray']);
Route::get('/{id}', [StateController::class , 'show']);
Route::post('/{id}', [StateController::class , 'update']);
Route::delete('/{id}', [StateController::class , 'destroy']);
<?php
use Illuminate\Support\Facades\Route;
use App\http\Controllers\MedicosController;

Route::get('', [MedicosController::class , 'index']);
Route::post('', [MedicosController::class , 'store']);
Route::get('/{id}', [MedicosController::class , 'show']);
Route::post('/{id}', [MedicosController::class , 'update']);
Route::delete('/{id}', [MedicosController::class , 'destroy']);
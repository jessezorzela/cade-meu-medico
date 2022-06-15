<?php
use Illuminate\Support\Facades\Route;
use App\http\Controllers\EspecialidadesController;

Route::get('', [EspecialidadesController::class , 'index']);
Route::post('', [EspecialidadesController::class , 'store']);
Route::get('/{id}', [EspecialidadesController::class , 'show']);
Route::post('/{id}', [EspecialidadesController::class , 'update']);
Route::delete('/{id}', [EspecialidadesController::class , 'destroy']);
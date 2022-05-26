<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\http\Controllers\AuthController;

Route::post('login',[AuthController::class ,'login']);
Route::get('me', [AuthController::class,'me']);
Route::get('logout', [AuthController::class ,'logout']);
Route::get('refresh', [AuthController::class , 'refresh']);




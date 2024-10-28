<?php

	use App\Http\Controllers\Api\CarBrandController;
	use App\Http\Controllers\Api\CarController;
	use App\Http\Controllers\Api\CarModelController;
	use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/cars', CarController::class);

Route::get('models',  [CarModelController::class, 'index']);

Route::get('brands',  [CarBrandController::class, 'index']);

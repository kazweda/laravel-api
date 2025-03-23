<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\UserController;

// Route::apiResource('products', ProductController::class);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::apiResource('products', ProductController::class);
});

Route::post("login",[UserController::class,'index']);

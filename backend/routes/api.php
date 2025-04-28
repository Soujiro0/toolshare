<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemCategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemUnitController;
use App\Http\Controllers\UserController;

Route::post('/login', [
    AuthController::class,
    'login'
]);

Route::apiResource('users', UserController::class);

Route::apiResource('categories', ItemCategoryController::class);

Route::apiResource('items', ItemController::class);

Route::post('/items-with-units', [
    ItemController::class,
    'storeWithUnits'
]);

Route::apiResource('item-units', ItemUnitController::class);


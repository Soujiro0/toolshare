<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BorrowRequestController;
use App\Http\Controllers\ItemCategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemUnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BorrowRequestItemController;
use App\Http\Controllers\DashboardController;

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

Route::apiResource('borrow-requests', BorrowRequestController::class);

Route::get('borrow-requests/last-update', [
    BorrowRequestController::class,
    'getLastUpdateTime'
]);

Route::put('/borrow-requests-details/{id}', [
    BorrowRequestController::class,
    'updateRequestDetails'
]);

Route::put('borrow-request-items/return', [
    BorrowRequestItemController::class,
    'returnItems'
]);

Route::delete('borrow-request-items/{request_id}/{unit_id}', [BorrowRequestItemController::class, 'destroy']);

Route::apiResource('borrow-request-items', BorrowRequestItemController::class);

Route::get('dashboard/stats', [DashboardController::class, 'getStats']);

Route::get('dashboard/most-borrowed', [DashboardController::class, 'getMostBorrowedItems']);

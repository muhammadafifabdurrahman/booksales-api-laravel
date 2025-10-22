<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');





Route::middleware(['auth:api'])->group(function () {
    Route::apiResource('/books', BookController::class)->only(['index', 'store', 'show']);
    Route::apiResource('/genres', GenreController::class)->only(['index', 'store', 'show']);
    Route::apiResource('/authors', AuthorController::class)->only(['index', 'store' ,'show']);
    Route::apiResource('/transactions', TransactionController::class)->only(['index', 'store', 'show']);

    Route::middleware(['role:admin'])->group(function () {
        Route::apiResource('/books', BookController::class)->only(['update', 'destroy']);
        Route::post('/books/{id}', [BookController::class, 'update']);
        Route::apiResource('/genres', GenreController::class)->only(['update', 'destroy']);
        Route::post('/genres/{id}', [GenreController::class, 'update']);
        Route::apiResource('/authors', AuthorController::class)->only(['update', 'destroy']);
        Route::post('/authors/{id}', [AuthorController::class, 'update']);
        Route::apiResource('/transactions', TransactionController::class)->only(['update', 'destroy']);
        Route::post('/transactions/{id}', [TransactionController::class, 'update']);
    });

});







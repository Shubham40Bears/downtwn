<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/{id}/{slug?}', [ProductController::class, 'show']);
    Route::get('/category/{categorySlug}', [ProductController::class, 'getByCategory']);
});

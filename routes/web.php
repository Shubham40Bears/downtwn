<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [LandingPageController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/category/{category_slug?}', [ShopController::class, 'getProductByCategory'])->name('category');
Route::get('/p/d/{product_id}/{product_slug?}', [ShopController::class, 'get'])->name('productDetails');
Route::post('/add-to-cart', [ProductController::class, 'addToCart'])->name('addtocart');
Route::get('/cart', [ProductController::class, 'cart'])->name('cart');
Route::post('/payment', [ProductController::class, 'initPayment'])->name('initPayment');
Route::post('/confirm-order', [ProductController::class, 'confirmOrder'])->name('confirmOrder');
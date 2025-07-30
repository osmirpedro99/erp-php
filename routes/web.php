<?php

use App\Http\Controllers\CouponController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StorageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('dashboard');

Route::post('/strorage/create', [StorageController::class, 'store'])->name('createStorage');
Route::put('/strorage/update/{id}', [StorageController::class, 'update'])->name('updateStorage');

Route::post('/product/create', [ProductController::class, 'store'])->name('createProduct');

Route::post('/coupon/create', [CouponController::class, 'store'])->name('createCoupon');
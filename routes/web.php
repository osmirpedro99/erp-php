<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\StorageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('dashboard');

Route::post('/strorage/create', [StorageController::class, 'store'])->name('createStorage');
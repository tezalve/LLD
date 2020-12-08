<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route::get('/', [ProductController::Class, 'index']);
Route::resource('products', ProductController::class);
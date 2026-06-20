<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/search', [ProductController::class, 'search']);
Route::get('/products/sort/asc', [ProductController::class, 'sortAsc']);
Route::get('/products/sort/desc', [ProductController::class, 'sortDesc']);
Route::get('/products/count', [ProductController::class, 'count']);

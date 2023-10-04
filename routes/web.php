<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/sub-category', [SubCategoryController::class, 'index']);
Route::get('/order',[OrderController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']);
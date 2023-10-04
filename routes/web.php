<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
Route::get('/category-add', [CategoryController::class, 'create'])->name('admin.category-add');

// Sub Category
Route::get('/sub-category', [SubCategoryController::class, 'index']);
Route::get('/order',[OrderController::class, 'index'])->name('admin.order');
Route::get('/product', [ProductController::class, 'index'])->name('admin.product');
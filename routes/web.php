<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;

use App\Http\Controllers\Auth\UserAuthController;

Route::get('/sign-up-view', [UserAuthController::class, 'sign_up_view'])->name('user.sign-up-view');
Route::get('/sign-up', [UserAuthController::class, 'sign_up'])->name('user.sign-up');

Route::get('/', [UserAuthController::class, 'sign_in_view'])->name('user.sign-in-view');
Route::get('/sign-in', [UserAuthController::class, 'sign_in'])->name('user.sign-in');

// category
Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
Route::get('/category-create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::post('/category', [CategoryController::class, 'store'])->name('admin.category-store');

// Sub Category
Route::get('/sub-category', [SubCategoryController::class, 'index']);

// orders
Route::get('/order',[OrderController::class, 'index'])->name('admin.order');

// products
Route::get('/product', [ProductController::class, 'index'])->name('admin.product');
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;


use App\Http\Controllers\User\ProductController as UserProductController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\OrderController as UserOrderController;

use App\Http\Controllers\Auth\UserAuthController;

Route::get('/sign_up', [UserAuthController::class, 'sign_up_view'])->name('user.sign_up');
Route::post('/sign-up', [UserAuthController::class, 'sign_up'])->name('user.sign-up');

Route::get('/', [UserAuthController::class, 'sign_in_view'])->name('user.sign_in');
Route::post('/sign-in', [UserAuthController::class, 'sign_in'])->name('user.sign-in');


Route::group(['prefix' => 'user'], function () {
    
    // products
    Route::group(['prefix' => 'products'], function () {
        Route::controller(UserProductController::class)->group(function () {
            Route::get('/', 'index')->name('user.product');
        });
    });

    // cart
    Route::group(['prefix' => 'cart'], function () {
        Route::controller(CartController::class)->group(function () {
            Route::get('/', 'index')->name('user.cart');

            // ajax
            Route::post('/add-cart', 'add_cart')->name('user.cart.add-cart');
        });
    });

    // orders
    Route::group(['prefix' => 'orders'], function () {
        Route::controller(UserOrderController::class)->group(function () {
            Route::post('/place-order', 'place_order')->name('user.order.place-order');
        });
    });

});

// category
Route::group(['prefix' => 'category'], function () {
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/', 'index')->name("admin.category");
        Route::get('/create', 'create')->name("admin.category.create");
        Route::post('/', 'store')->name("admin.category.store");

        Route::get('/show/{id}', 'show')->name("admin.category.show");

        Route::get('/{id}', 'edit')->name("admin.category.edit");
        Route::post('/{id}', 'update')->name("admin.category.update");

        // ajax method
        Route::get('/status/{id}', 'change_status')->name("store.category.status");
        Route::delete('/{id}', 'destroy')->name("store.category.delete");
    });
});

// sub-category
Route::group(['prefix' => 'sub-category'], function () {
    Route::controller(SubCategoryController::class)->group(function () {
        Route::get('/create/{categoryId}', 'create')->name("admin.sub-category.create");
        Route::post('/{categoryId}', 'store')->name("admin.sub-category.store");

        Route::get('/{id}', 'edit')->name("admin.sub-category.edit");
        Route::post('/update/{id}', 'update')->name("admin.sub-category.update");

        // ajax method
        Route::get('/show/{id}', 'show')->name("admin.sub-category.show");
        Route::get('/status/{id}', 'change_status')->name("admin.sub-category.status");
        Route::delete('/{id}', 'destroy')->name("admin.sub-category.delete");
    });
});

// products
Route::group(['prefix' => 'product'], function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get("/", 'index')->name('admin.product');

        Route::get("/create", 'create')->name('admin.product.create');
        Route::post("/", 'store')->name('admin.product.store');

        Route::get("/show/{id}", 'show')->name('admin.product.show');

        Route::get("/{id}", 'edit')->name('admin.product.edit');
        Route::post("/{id}", 'update')->name('admin.product.update');
    });
});

// orders
Route::get('/order',[OrderController::class, 'index'])->name('admin.order');

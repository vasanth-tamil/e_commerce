<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', function () {
    return view('admin.category.index');
});

Route::get('/sub_category', function () {
    return view('admin.sub_category.index');
});
Route::get('/product', function () {
    return view('admin.product.index');
});
Route::get('/orders', function () {
    return view('admin.orders.index');
}); 
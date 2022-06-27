<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', \App\Http\Controllers\HomeController::class);
Route::resource('/products', \App\Http\Controllers\ProductController::class);
Route::resource('/categories', \App\Http\Controllers\CategoryController::class);
Route::resource('/brands', \App\Http\Controllers\BrandController::class);
Route::resource('/cart', \App\Http\Controllers\CartController::class);
Route::get('cart/add/{id}', [\App\Http\Controllers\CartController::class, 'addToCart']);
Route::get('cart/remove/{id}', [\App\Http\Controllers\CartController::class, 'removeFromCart']);
Route::get('cart/remove', [\App\Http\Controllers\CartController::class, 'removeCart']);







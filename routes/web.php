<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia as Inertia;

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

Route::get('/', function () {
    return Inertia::render('Dashboard');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum'])->get('/products/shopping-cart', function () {
    return Inertia::render('Cart');
})->name('shopping-cart');

Route::middleware(['auth:sanctum'])->get('/products/shopping-cart/checkout', function () {
    return Inertia::render('Checkout');
})->name('checkout');

Route::middleware(['auth:sanctum'])->get('/paynow/order', function () {
    return Inertia::render('OrderCompleted');
})->name('order-completed');

Route::get('/products/{product}','App\Http\Controllers\ProductController@show')->name('single-product');

Route::get('/shop/products/', function () {
    return Inertia::render('Shop');
})->name('shop');


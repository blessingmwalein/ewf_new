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
    return view('template.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum'])->get('/products/shopping-cart', function () {
    return Inertia::render('Cart');
})->name('shopping-cart');

Route::middleware(['auth:sanctum'])->get('/products/shopping-cart/checkout', function () {
    return Inertia::render('Checkout');
})->name('checkout');

Route::get('/products/{product}','App\Http\Controllers\ProductController@show')->name('single-product');


<?php

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('products', 'App\Http\Controllers\ProductController')->except(['destroy', 'create', 'store', 'update', 'edit']);
Route::resource('categories', 'App\Http\Controllers\CategoryController')->except(['destroy', 'create', 'store', 'update', 'edit']);
Route::resource('sub_categories', 'App\Http\Controllers\SubCategoryController')->except(['destroy', 'create', 'store', 'update', 'edit']);

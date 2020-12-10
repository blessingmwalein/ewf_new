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
Route::resource('variation_options','App\Http\Controllers\VariationOptionController')->except(['destroy', 'create', 'store', 'update', 'edit']);
Route::get('variation_option/colors', 'App\Http\Controllers\VariationOptionController@colorsOption');
Route::get('variation_option/sizes', 'App\Http\Controllers\VariationOptionController@sizesOption');
Route::post('product_combination/price', 'App\Http\Controllers\ProductCombinationController@price');
Route::post('cart/add_cart_items/{cart}', 'App\Http\Controllers\CartController@addCartItems');
Route::get('/carts/{cart}', 'App\Http\Controllers\CartController@index');
Route::get('distance_cost', 'App\Http\Controllers\DistanceCostController@index');
Route::get('city_towns', 'App\Http\Controllers\CityTownController@index');

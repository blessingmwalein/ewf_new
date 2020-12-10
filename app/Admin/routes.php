<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('products', ProductController::class);
    $router->resource('categories', CategoryController::class);
    $router->resource('sub-categories', SubCategoryController::class);
    $router->resource('brands', BrandController::class);
    $router->resource('product-variation-options', ProductVariationOptionController::class);
    $router->resource('product-variation-option-values', ProductVariationOptionValueController::class);
    $router->resource('product-images', ProductImageController::class);    
    $router->resource('image-galleries', ImageGalleryController::class);
    $router->resource('product-combinations', ProductCombinationController::class);
    $router->resource('product-stocks', ProductStockController::class);
    $router->resource('variations', VariationController::class);
    $router->resource('variation-options', VariationOptionController::class);
    $router->resource('distance-costs', DistanceCostController::class);
    $router->resource('orders', OrderController::class);
    $router->resource('city-towns', CityTownController::class);
});

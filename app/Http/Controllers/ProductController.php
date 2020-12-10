<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use Inertia\Inertia as Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProductResource::collection(Product::paginate(10));
    }

    public function show(Product $product)
    {
       
        return Inertia::render('SingleProduct', ['product'=>new ProductResource($product)]);
    }
}

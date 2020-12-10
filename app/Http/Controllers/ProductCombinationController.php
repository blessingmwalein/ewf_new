<?php

namespace App\Http\Controllers;

use App\Models\ProductCombination;
use Illuminate\Http\Request;

class ProductCombinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function price(Request $request){

        $unique_id = $request->unique_id;

        $combination = ProductCombination::where('unique_string_id', $unique_id )->first();
        if($combination){
            return response()->json(['price'=> $combination->price], 200);
        }

        return $this->jsonError("Combination out of stock");
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCombination  $productCombination
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCombination $productCombination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCombination  $productCombination
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCombination $productCombination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductCombination  $productCombination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCombination $productCombination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCombination  $productCombination
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCombination $productCombination)
    {
        //
    }
}

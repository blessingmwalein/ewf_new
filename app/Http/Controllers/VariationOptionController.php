<?php

namespace App\Http\Controllers;

use App\Http\Resources\VariationOptionResource;
use App\Models\VariationOption;
use Illuminate\Http\Request;

class VariationOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VariationOptionResource::collection(VariationOption::all());
    }

    public function colorsOption(){
        $variationOptions = VariationOption::all();
        $colorsOption = array();

        foreach ($variationOptions as $variationOption) {
           $variationOption->variation_name = $variationOption->variation->variation_name;
           if( $variationOption->variation_name == 'Color'){
            array_push($colorsOption,$variationOption);
             }
        }

        return VariationOptionResource::collection($colorsOption);
    }

    public function sizesOption(){
        $variationOptions = VariationOption::all();
        $sizesOption = array();

        foreach ($variationOptions as $variationOption) {
           $variationOption->variation_name = $variationOption->variation->variation_name;
           if( $variationOption->variation_name == 'Size'){
            array_push($sizesOption,$variationOption);
             }
        }
    
        return VariationOptionResource::collection($sizesOption);
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
     * @param  \App\Models\VariationOption  $variationOption
     * @return \Illuminate\Http\Response
     */
    public function show(VariationOption $variationOption)
    {
        return new VariationOptionResource($variationOption);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VariationOption  $variationOption
     * @return \Illuminate\Http\Response
     */
    public function edit(VariationOption $variationOption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VariationOption  $variationOption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VariationOption $variationOption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VariationOption  $variationOption
     * @return \Illuminate\Http\Response
     */
    public function destroy(VariationOption $variationOption)
    {
        //
    }
}

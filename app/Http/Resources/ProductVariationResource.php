<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductVariationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            "product_variation_name" => $this->product_variation_name,
            "product_name" => $this->product->product_name,
            "product_variation_options" => ProductVariationOptionResource::collection($this->product_option_values)
        ];
    }
}

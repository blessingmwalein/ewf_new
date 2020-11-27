<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductVariationOptionResource extends JsonResource
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
            "product_variation_option_name" => $this->product_variation_value_name,
            "product_variation_name"=>$this->product_variation_option->product_variation_name,
            "product_images" => ProductImageResource::collection($this->product_images),
        ];
    }
}

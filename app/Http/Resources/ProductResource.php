<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ProductCombinationResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "product_name" => $this->product_name,
            "description" =>$this->description,
            "product_slug" => $this->product_slug,
            "preview_image" => $this->preview_image,
            "category_name"=> $this->category->category_name,
            "sub_category_name" => $this->sub_category->sub_category_name,
            "brand_name" => $this->brand->brand_name,
            "colors"=> $this->colors,
            "sizes" => $this->sizes,
            "product_combinations" => ProductCombinationResource::collection($this->product_combinations),
            "product_variations"=> ProductVariationResource::collection($this->product_variation_options),
           
        ];
    }
}

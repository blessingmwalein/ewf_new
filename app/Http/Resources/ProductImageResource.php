<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductImageResource extends JsonResource
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
            "product_variation_option" => $this->product_variation_option_value,
            "image_small" => $this->image->small,
            "image_medium" => $this->image->medium,
            "image_large" => $this->image->large
        ];
    }
}

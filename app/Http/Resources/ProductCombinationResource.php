<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductCombinationResource extends JsonResource
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
            "combination_string"=>$this->combination_string,
            "unique_string_id"  => $this->unique_string_id,
            "price" => $this->price,
            "sku" => $this->sku,
            "product_id"=> $this->product_id,
            "available_stock" => $this->available_stock,
            "product_name" => $this->product->product_name,
            "total_stock"=>$this->stock ? $this->stock->total_stock : null,
            "unit_price" =>$this->stock ? $this->stock->unit_price : null,
        ];
    }
}

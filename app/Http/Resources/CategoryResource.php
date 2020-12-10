<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
// use App\Http\Resources\ProductResource;

class CategoryResource extends JsonResource
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
            "id"=>$this->id,
            "category_name" => $this->category_name,
            "category_icon" => $this->category_icon,
            "category_slug" => $this->category_slug,
            "products" => ProductResource::collection($this->products),
            "sub_categories" => SubCategoryResource::collection($this->sub_categories)
        ];
    }
}

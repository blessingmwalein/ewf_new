<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return  [
            "id" => $this->id,
            "sub_category_name" => $this->sub_category_name,
            "sub_category_icon" => $this->sub_category_icon,
            "sub_category_slug" => $this->sub_category_slug,
            "products" => ProductResource::collection($this->products),
        ];
    }
}

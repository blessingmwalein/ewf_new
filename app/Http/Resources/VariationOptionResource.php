<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VariationOptionResource extends JsonResource
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
            'id'=> $this->id,
            'variation_id' => $this->variation_id,
            "variation_option_name" => $this->variation_option_name,
            "variation_name" => $this->variation_name,
            
        ];
    }
}

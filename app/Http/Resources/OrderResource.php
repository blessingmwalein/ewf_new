<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            "address"=>$this->address,
            "mobile" => $this->mobile,
            "items" => json_decode($this->items),
            "ref_number"=>$this->ref_number,
            "order_notes" => $this->order_notes,
            "transport_cost" => $this->transport_cost,
            "id_passport" => $this->id_passport,
            "email" => $this->email,
            "city_town" => $this->city_town,
            "transaction" => $this->transaction
        ];
    }
}

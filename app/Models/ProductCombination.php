<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCombination extends Model
{
    use HasFactory;

    protected $fillable = [
        "combination_string",
        "unique_string_id",
        "price",
        "product_id",
        "sku",
        "available_stock"
    ];

    public function stock(){
        return $this->hasOne(ProductStock::class);
    }

    public function setCombinationStringAttribute($value)
    {
        $this->attributes['combination_string'] = implode("-", array_values($value));
        $this->attributes['unique_string_id'] =strtolower(implode("", array_values($value)));
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}

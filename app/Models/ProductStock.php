<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStock extends Model
{
    use HasFactory;

    protected $fillable= [
        "total_stock",
        "unit_price",
        "product_combination_id"
    ];

    public function product_combination(){
        return $this->belongsTo(ProductCombination::class);
    }

}

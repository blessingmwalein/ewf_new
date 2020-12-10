<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariationOption extends Model
{
    use HasFactory;

    protected $fillable =[
        "id",
        "product_id",
        "product_variation_name",
    ];

    

    public function product(){
        return $this->belongsTo(Product::class);
    }
    
    public function product_option_values(){
        return $this->hasMany(ProductVariationOptionValue::class);
    }

    public function getNameOptionAttribute(){
        return $this->product->product_name . ' - '. $this->product_variation_name;
    }
}

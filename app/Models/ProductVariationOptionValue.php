<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariationOptionValue extends Model
{
    use HasFactory;
    

    protected $fillable =[
        "product_variation_option_id",
        "product_variation_value_name",
    ];

    // protected $appends = ['product_id'];

    // public function setProductIdAttribute(){
    //     $this->product_id = $this->product_variation_option->product_id;
    // }


    
    public function product_images(){
        return $this->hasMany(ProductImage::class);
    }

    public function product_variation_option(){
        return $this->belongsTo(ProductVariationOption::class);
    }
}

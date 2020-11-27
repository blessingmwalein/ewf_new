<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable= [
        "image_gallery_id",
        "product_variation_value_id"
    ];

    public function image(){
        return $this->hasOne(ImageGallery::class);
    }

    public function product_variation_option_value(){
        return $this->belongsTo(ProductVariationOptionValue::class);
    }
}

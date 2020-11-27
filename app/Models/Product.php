<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable =[
        "product_name",
        "product_slug",
        "category_id",
        "sub_category_id",
        "brand_id",
        "preview_image"
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function($product) {
            $product->product_slug = Str::slug($product->product_name);
        });
    }

    public function getRouteKeyName()
    {
        return "product_slug";
    }

    public function images(){
        return $this->hasMany(ProductImage::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function sub_category(){
        return $this->belongsTo(SubCategory::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function product_combinations(){
        return $this->hasMany(ProductCombination::class);
    }

    public function product_variation_options(){
        return $this->hasMany(ProductVariationOption::class);
    }
}

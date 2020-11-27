<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        "brand_name",
        "brand_slug",
        "brand_icon"
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function($brand) {
            $brand->brand_slug = Str::slug($brand->brand_name);
        });
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}

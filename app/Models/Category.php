<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        "category_name",
        "category_slug",
        "category_icon"
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function($category) {
            $category->category_slug = Str::slug($category->category_name);
        });
    }

    public function getRouteKeyName()
    {
        return "category_slug";
    }

    public function sub_categories(){
        return $this->hasMany(SubCategory::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}

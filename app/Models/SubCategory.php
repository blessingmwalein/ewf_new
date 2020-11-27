<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable =[
        "category_id",
        "sub_category_name",
        "sub_category_slug",
        "sub_category_icon"
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function($sub_category) {
            $sub_category->sub_category_slug = Str::slug($sub_category->sub_category_name);
        });
    }

    public function getRouteKeyName()
    {
        return "sub_category_slug";
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}

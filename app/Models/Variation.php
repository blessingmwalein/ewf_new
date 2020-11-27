<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;

    protected $fillable =[
        "variation_name"
    ];

    public function variation_options(){
        return $this->hasMany(VariationOption::class);
    }
}

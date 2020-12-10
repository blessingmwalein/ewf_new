<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariationOption extends Model
{
    use HasFactory;

    protected $fillable=[
        "variation_id",
        "variation_option_name",
       
    ];

    protected $appends = ['variation_name'];

    public function variation(){
        return $this->belongsTo(Variation::class);
    }
  
  
}

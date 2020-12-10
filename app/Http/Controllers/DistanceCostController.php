<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DistanceCost;

class DistanceCostController extends Controller
{
    public function index(){
         return DistanceCost::all()->first();

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\CityTown;
use Illuminate\Http\Request;

class CityTownController extends Controller
{
    public function index()
    {
        return CityTown::all();   
     }
}

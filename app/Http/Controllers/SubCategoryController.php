<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Resources\SubCategoryResource;

class SubCategoryController extends Controller
{
    public function index()
    {
        return SubCategoryResource::collection(SubCategory::paginate(10));
    }
    public function show(SubCategory $sub_category)
    {
        return new SubCategoryResource($sub_category);
    }

}

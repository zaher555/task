<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return response()->json($categories);
    }
    public function show($cId)
    {
        $category=Category::find($cId);
        return response()->json($category);

    }
}

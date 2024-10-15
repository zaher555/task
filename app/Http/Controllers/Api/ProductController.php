<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products',compact('products'));
    }
    public function show($pId)
    {
        $product=Product::find($pId);
        return $product;
    }
    public function create()
    {
        $categories=Category::all();
        return view('newProduct',compact('categories'));
    }
    public function store(Request $request,Product $product)
    {
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description'=>'required',
            'price' => 'required|numeric',
            'category' => 'required', // Ensure the category exists
            // Add other fields as necessary
        ],[
            'name.required' => 'name is required',
            'price.required' => 'price is required',
            'description.required'=>'description is required',
            'category.required' => 'Category is required',
        ]);
        $product = Product::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'category_id' => $validatedData['category'], // Use the category ID from the validated data
        ]);
    }
}

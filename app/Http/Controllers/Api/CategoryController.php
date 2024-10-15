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
        return view('categories',compact('categories'));
    }
    public function show($cId)
    {
        $category=Category::find($cId);
        return response()->json($category);

    }
    public function create()
    {
        return view('newCategory');
    }
    public function store(Request $request,Category $category)
    {
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description'=>'required',
        ],[
            'name.required' => 'name is required',
            'description.required'=>'description is required',
        ]);
        $category = Category::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
        ]);
        return redirect('/categories')->with('success','category added successfully');
    }
    public function edit(Category $category)
    {
        return view('updateCategory',compact('category'));
    }
    public function update(Request $request,Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description'=>'required',
        ],[
            'name.required' => 'name is required',
            'price.required' => 'price is required',
        ]);
        $category->update($validatedData);
        return redirect('/categories')->with('success','category updated successfully');
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/categories')->with('success','category deleted successfully');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   */

  public function filter(Request $request)
  {
    $query = Categories::query();

    // Filter by title
    if ($request->filled('name')) {
      $query->where('name', 'like', '%' . $request->input('name') . '%');
    }

    // Filter by start date


    // Get the filtered Categories
    $categories = $query->get();

    return view('admin.layouts.category.list-category', compact('categories'));
  }

  public function index()
  {
    $categories = Categories::all();
    return view('admin.layouts.category.list-category', compact('categories'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {

    return view('admin.layouts.category.add-category');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required|max:100',
      'description' => 'nullable|max:255',
    ]);

    Categories::create($request->all());
    return redirect()->route('list-category')->with('success', 'Category created successfully');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $category = Categories::findOrFail($id);
    return view('admin.layouts.category.update-category', compact('category'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $request->validate([
      'name' => 'required|max:100',
      'description' => 'nullable|max:255',
    ]);
    $category = Categories::findOrFail($id);
    $category->update($request->all());
    return redirect()->route('list-category')->with('success', 'Category updated successfully');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $category = Categories::findOrFail($id);
    $category->delete();
    return redirect()->route('list-category')->with('success', 'Category deleted successfully');
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('management', compact('categories'));
    }

    public function create()
    {
        return view('addCategory');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create(['name' => $request->name]);

        return redirect()->route('management')->with('success', 'Categorie toegevoegd!');
    }

    public function edit(Category $category)
    {
        return view('editCategory', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update(['name' => $request->name]);

        return redirect()->route('management')->with('success', 'Categorie bijgewerkt!');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('management')->with('success', 'Categorie verwijderd!');
    }
}

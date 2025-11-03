<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product; // Vergeet dit niet!
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Category $category = null)
    {
        $categories = Category::all();

        if ($category) {
            $products = $category->products()->get();
        } else {
            $products = Product::all();
        }

        return view('products', compact('products', 'categories', 'category'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('addproduct', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categories' => 'required|array',
        ]);

        // Product aanmaken
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);
        
        // Pivot tabel vullen
        $product->categories()->attach($request->categories);
        
        // Afbeeldingen opslaan
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('products', 'public');
                $product->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('management')->with('success', 'Product toegevoegd!');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('editproduct', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categories' => 'required|array',
        ]);

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        // Synchroniseer categorieën
        $product->categories()->sync($request->categories);
        
        // Voeg nieuwe afbeeldingen toe
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('products', 'public');
                $product->images()->create(['path' => $path]);
            }
        }

        return redirect()->back()->with('success', 'Product bijgewerkt!');
    }


    public function destroy(Product $product)
    {
        foreach ($product->images as $image) {
            if (Storage::disk('public')->exists($image->path)) {
                Storage::disk('public')->delete($image->path);
            }
            $image->delete();
        }

        $product->delete();


        return redirect()->route('products')->with('success', 'Product verwijderd!');
    }

    public function destroyImage(\App\Models\ProductImage $image)
    {
        if (Storage::disk('public')->exists($image->path)) {
            Storage::disk('public')->delete($image->path);
        }
        $image->delete();

        return back()->with('success', 'Afbeelding verwijderd!');
    }
}

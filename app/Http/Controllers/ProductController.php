<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Vergeet dit niet!
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // 1️⃣ Lijst van producten
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    // 2️⃣ Formulier voor nieuw product
    public function create()
    {
        return view('addproduct');
    }

    // 3️⃣ Product opslaan
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'type' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images', 'public');
        }

        Product::create($validated);

        return redirect()->route('products')->with('success', 'Product toegevoegd!');
    }

    // 4️⃣ Formulier voor bewerken
    public function edit(Product $product)
    {
        return view('editproduct', compact('product'));
    }

    // 5️⃣ Product bijwerken
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'type' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $validated['image'] = $request->file('image')->store('images', 'public');
        }

        $product->update($validated);

        return redirect()->route('products')->with('success', 'Product bijgewerkt!');
    }
    public function destroy(Product $product)
    {
        // Verwijder afbeelding als die bestaat
        if ($product->image && file_exists(storage_path('app/public/' . $product->image))) {
            unlink(storage_path('app/public/' . $product->image));
        }

        $product->delete();

        return redirect()->route('products')->with('success', 'Product deleted successfully!');
    }
}

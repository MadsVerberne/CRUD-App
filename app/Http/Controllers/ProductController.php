<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Vergeet dit niet!

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Haal alle producten op uit de database
        return view('products', compact('products'));
    }
}

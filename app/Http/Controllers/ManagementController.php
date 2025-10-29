<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function index()
    {
        $products = Product::all(); // collectie van alle producten
        return view('management', compact('products'));
    }
}

<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public pages
Route::get('/', fn() => view('welcome'))->name('welcome');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/contact', fn() => view('contact'))->name('contact');

// Routes that require authentication
Route::middleware(['auth', 'verified'])->group(function () {

    // Management dashboard (stuurt $products en $categories)
    Route::get('/management', [ManagementController::class, 'index'])->name('management');

    // Product routes
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/products/category/{category}', [ProductController::class, 'index'])->name('products.category');
    Route::get('/addproduct', [ProductController::class, 'create'])->name('addproduct');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/editproduct/{product}', [ProductController::class, 'edit'])->name('editproduct');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::delete('/products/image/{image}', [ProductController::class, 'destroyImage'])->name('products.image.destroy');


    // Category CRUD routes
    Route::resource('categories', CategoryController::class)
        ->except(['show']); // index/create/store/edit/update/destroy

    // Profile management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Include auth routes (login/register)
require __DIR__ . '/auth.php';

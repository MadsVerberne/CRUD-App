<?php

use App\Http\Controllers\ManagementController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/management', [ManagementController::class, 'index'])->name('management');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/addproduct', [ProductController::class, 'create'])->name('addproduct');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/editproduct/{product}', [ProductController::class, 'edit'])->name('editproduct');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');


Route::get('/management', function () {
    return view('management');
})->middleware(['auth', 'verified'])->name('management');

Route::get('/management', [managementController::class, 'index'])->name('management');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

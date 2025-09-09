<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Testproduct 1',
            'description' => 'Een testproduct.',
            'image' => null,
            'price' => 19.99
        ]);

        Product::create([
            'name' => 'Testproduct 2',
            'description' => 'Een testproduct.',
            'image' => null,
            'price' => 29.99
        ]);
    }
}


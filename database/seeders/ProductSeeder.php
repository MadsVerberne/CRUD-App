<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Haal alle categorie IDs op
        $categoryIds = Category::pluck('id')->toArray();

        // Maak 20 producten
        for ($i = 0; $i < 20; $i++) {

            // Random food image van Unsplash
            $imageUrl = 'https://source.unsplash.com/60x60/?food,' . $faker->unique()->word;

            // Product aanmaken
            $product = Product::create([
                'name' => $faker->words(2, true),
                'description' => $faker->sentence(),
                'image' => $imageUrl,
                'price' => $faker->randomFloat(2, 5, 50),
            ]);

            // Random categorieën koppelen (1 tot 3 categorieën)
            $randomCategories = $faker->randomElements($categoryIds, rand(1, 3));
            $product->categories()->attach($randomCategories);
        }
    }
}

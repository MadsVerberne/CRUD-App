<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $types = ['Appetizer', 'Main Course', 'Dessert'];

        for ($i = 0; $i < 20; $i++) {

            // Kies een random food image van Unsplash
            $imageUrl = 'https://source.unsplash.com/60x60/?food,' . $faker->unique()->word;

            Product::create([
                'name' => $faker->words(2, true),
                'description' => $faker->sentence(),
                'image' => $imageUrl,
                'price' => $faker->randomFloat(2, 5, 50),
                'type' => $faker->randomElement($types),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

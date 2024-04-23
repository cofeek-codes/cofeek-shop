<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 15; $i++) {
            Product::create([
                'title' => fake()->word(),
                'price' => fake()->randomNumber(4, true),
                'manufacturer' => fake()->country(),
                'photo' => 'printer' . rand(1, 5) . '.png',
                'releaseYear' => fake()->year(),
                'model' => fake()->words(3, true),
                'category_id' => rand(1, 3)

            ]);
        }
    }
}

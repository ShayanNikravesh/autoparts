<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => 11,
            'brand_id' => 1,
            'tracking_code' => 'BA'.random_int(111111111,999999999), 
            'title' => fake()->title(),
            'english_title' => fake()->title(),
            'price' => '20000000',
            'price_discounted' => '0',
            'status'=>'active',
            'description' => fake()->text(),
            'review' => fake()->text(),
            'stock' => 10,
        ];
    }
}

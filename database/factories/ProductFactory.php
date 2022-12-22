<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'title'       => fake()->word(),
            'summary'     => fake()->sentence(),
            'type'        => fake()->randomDigit(),
            'sku'         => fake()->randomDigit(),
            'price'       => fake()->randomDigit(),
            'quantity'    => fake()->randomDigit(),
            'created_at'  => now(),
            'updated_at'  => now(),
            'category_id' => Category::factory(),

        ];
    }
}

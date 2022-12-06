<?php

namespace Database\Factories;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cart_items>
 */
class cart_itemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => Product::factory(),
            'cart_id' => Cart::factory(),
            'sku' => fake()->randomDigit(),
            'price' => fake()->randomNumber(),
            'quantity' => fake()->randomDigit(),
            'created_at' => now(),
            'updated_at' => now(),
            //
        ];
    }
}

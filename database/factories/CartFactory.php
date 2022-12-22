<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart>
 */
class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'session_id' => fake()->randomDigit(),
            'token'      => fake()->randomDigit(),
            'status'     => fake()->randomDigit(),
            'first_name' => fake()->firstName(),
            'last_name'  => fake()->lastName(),
            'mobile'     => fake()->phoneNumber(),
            'email'      => fake()->email(),
            'city'       => fake()->city(),
            'province'   => fake()->state(),
            'created_at' => now(),
            'updated_at' => now(),
            'user_id'    => User::factory(),

            //
        ];
    }
}

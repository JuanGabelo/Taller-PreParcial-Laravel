<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Computer>
 */
class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "computer_name" => fake()->unique()->word(5, true),
            "computer_date" => fake()->dateTime(),
            "computer_max_capacity" => fake()->word(),
            "computer_brand" => fake()->word(),
            "computer_description" => fake()->word(20),
            "computer_color" => fake()->word(),
            "computer_is_active" => fake()->boolean(),
            "computer_price" => fake()->numberBetween(500000, 5000000),
            "computer_size" => fake()->word()
        ];
    }
}

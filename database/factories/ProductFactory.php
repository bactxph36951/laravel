<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
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
            //
            'name' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 100, 100),
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,
            'description' => $this->faker->word,
            
        ];
    }
}

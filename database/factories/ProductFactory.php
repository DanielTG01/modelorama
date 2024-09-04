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
        /*
        product_number
        desc
        name
        branch
        price
        */
        return [
            'name' => fake()->lastName(),
            'desc' => fake()->paragraphs(1, true),
            'branch' => fake()->randomElement(['Modelo', 'Moctezuma', 'Heineken', 'Diageo', 'Carlsberg', 'Westvleteren']),
            'product_number' => fake()->numberBetween(100, 1000),
            'price' => fake()->randomFloat(2, 20, 250),
        ];
    }
}

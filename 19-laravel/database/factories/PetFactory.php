<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->colorName(),
            'kind' => fake()->randomElement(Array('Dog', 'Cat','Pig', 'Bird')),
            'weight' => fake()->numerify('#.#'),
            'age' => fake()->numberBetween(1,15),
            'breed' => fake()->randomElement(['type 1', 'type 2', 'type 3', 'type 4']),
            'location' => fake()->city(),
            'description' => fake()->sentence(5),
        ];
    }
}

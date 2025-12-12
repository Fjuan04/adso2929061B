<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        $pets = [
            'Max', 'Bella', 'Charlie', 'Luna', 'Lucy', 'Cooper', 'Daisy', 'Buddy', 'Molly', 'Rocky',
            'Bear', 'Sadie', 'Duke', 'Zoe', 'Toby', 'Chloe', 'Oliver', 'Lily', 'Jack', 'Sophie',
            'Teddy', 'Stella', 'Winston', 'Penny', 'Spider', 'Roxy', 'Leo', 'Ruby', 'Milo', 'Gracie',
            'Zeus', 'Mia', 'Louie', 'Lola', 'Jax', 'Coco', 'Bentley', 'Rosie', 'Murphy', 'Ellie',
            'Finn', 'Abby', 'Henry', 'Piper', 'Otis', 'Ginger', 'Tucker', 'Lulu', 'Gus', 'Nala',
            'Sam', 'Willow', 'Koda', 'Maddie', 'Apollo', 'Layla', 'Harley', 'Zara', 'Bruno', 'Pepper',
            'Beau', 'Lilly', 'Dexter', 'Sasha', 'Ace', 'Lexi', 'Scout', 'Maya', 'Jake', 'Izzy',
            'Bandit', 'Annie', 'Thor', 'Olive', 'Riley', 'Cookie', 'Marley', 'Hazel', 'Gunner', 'Emma',
            'Bo', 'Riley', 'Cash', 'Phoebe', 'Simba', 'Harper', 'Oreo', 'Belle', 'Rex', 'Dixie',
            'Hank', 'Holly', 'Moose', 'Sugar', 'Prince', 'Ivy', 'Chico', 'Maggie', 'Benny', 'Ella',
            'Bruce', 'Mocha', 'Rocco', 'Winnie', 'Rudy', 'Kona', 'Sammy', 'Athena', 'Tank', 'Cleo'
        ];

        return [
            'name'        => $pets[array_rand($pets)] . fake()->numerify('-##'),
            'kind'        => fake()->randomElement(['Dog', 'Cat', 'Dog', 'Bird', 'Mouse', 'Dog', 'Cat', 'Pig']),
            'weight'      => fake()->numberBetween(1, 80),
            'age'         => fake()->numberBetween(1, 18),
            'breed'       => fake()->colorName(),
            'location'    => fake()->city(),
            'description' => fake()->sentence(10),
            'created_at'  => now()
        ];
    }
}

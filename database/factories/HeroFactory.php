<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Hero>
 */
class HeroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array    //Hero::factory()->count(5)->create(); => creates 5 heroes with these attributes
    {
        return [
            'name' => fake()->name(), // Generate a fake name
            'skill' => fake()->numberBetween(0, 100), // Generate a fake skill level between 0 and 100
            'quirk' => fake()->word(), // Generate a fake quirk
        ];
    }   //all the generated will be stored in the database
}

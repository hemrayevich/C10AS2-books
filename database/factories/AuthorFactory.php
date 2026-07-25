<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'birth_date' => fake()->date('Y-m-d', '-25 years'),
            'death_date' => fake()->boolean(30) ? fake()->date('Y-m-d', 'now') : null,
            'bio' => fake()->paragraph(),
        ];
    }
}

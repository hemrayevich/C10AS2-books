<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Language;
use App\Models\Publisher;
use App\Models\Year;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::inRandomOrder()->first();
        $author = Author::inRandomOrder()->first();
        $language = Language::inRandomOrder()->first();
        $publisher = Publisher::inRandomOrder()->first();
        $year = Year::inRandomOrder()->first();
        
        return [
            'category_id' => $category->id,
            'author_id' => $author->id,
            'year_id' => $year->id,
            'language_id' => $language->id,
            'publisher_id' => $publisher->id,
            'name' => fake()->sentence(3),
            'page_number' => fake()->numberBetween(10, 1000),
            'code' => fake()->unique()->bothify('ISBN-###-????'),
            'like_count' => fake()->numberBetween(0, 5000),
        ];
    }
}

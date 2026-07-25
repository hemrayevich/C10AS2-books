<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Language;
use App\Models\Publisher;
use App\Models\User;
use App\Models\Year;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /*
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        
        $this->call([
            CategorySeeder::class,
            AuthorSeeder::class,
            YearSeeder::class,
            LanguageSeeder::class,
            PublisherSeeder::class,
            BookSeeder::class,
        ]);
            
        Year::factory(400)->create();
        Author::factory(100)->create();
        Category::factory(5)->create();
        Publisher::factory(30)->create();

        Book::factory(500)->create();
    }
}
            
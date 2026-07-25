<?php

namespace Database\Seeders;

use App\Models\Book;

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'category_id' => 2,
                'author_id' => 1,
                'year_id' => 1,
                'language_id' => 1,
                'publisher_id' => 3,
                'name' => 'Agyr günler',
                'page_number' => 153,
                'code' => 'ISBN-465-idad',
                'like_count' => '6500'
            ],
            [
                'category_id' => 5,
                'author_id' => 2,
                'year_id' => 2,
                'language_id' => 1, 
                'publisher_id' => 1,
                'name' => 'Saýlanan eserler ýygyndysy',
                'page_number' => 304,
                'code' => 'ISBN-965-rvai',
                'like_count' => '6499'
            ],
            [
                'category_id' => 3,
                'author_id' => 3,
                'year_id' => 3,
                'language_id' => 2,
                'publisher_id' => 2,
                'name' => 'Bay ata, garyp ata (Rich Dad Poor Dad)',
                'page_number' => 762,
                'code' => 'ISBN-984-sdunv',
                'like_count' => '6302'
            ],
            [
                'category_id' => 2,
                'author_id' => 4,
                'year_id' => 4,
                'language_id' => 1,
                'publisher_id' => 4,
                'name' => 'Kysmat',
                'page_number' => 102,
                'code' => 'ISBN-976-sadu',
                'like_count' => '6206'
            ],
            [
                'category_id' => 3,
                'author_id' => 5,
                'year_id' => 5,
                'language_id' => 3,
                'publisher_id' => 2,
                'name' => 'Iň baý adam Bagdatda (The Richest Man in Babylon)',
                'page_number' => 532,
                'code' => 'ISBN-865-acdi',
                'like_count' => '6495'
            ],
            [
                'category_id' => 6,
                'author_id' => 1,
                'year_id' => 6,
                'language_id' => 1,
                'publisher_id' => 1,
                'name' => 'Türkmen diliniň sözlügi',
                'page_number' => 468,
                'code' => 'ISBN-986-acmk',
                'like_count' => '5500'
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}

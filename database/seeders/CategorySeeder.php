<?php

namespace Database\Seeders;

use App\Models\Category;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Okuw edebaiaty'],
            ['name' => 'Çeper edebiyat'],
            ['name' => 'Biznes'],
            ['name' => 'Taryh'],
            ['name' => 'Poeziya'],
            ['name' => 'Lugal we ensiklopediya'],
        ];

        foreach ($categories as $categorie) {
            Category::create($categorie);
        }
    }
}

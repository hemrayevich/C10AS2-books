<?php

namespace Database\Seeders;

use App\Models\Year;
use Illuminate\Database\Seeder;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($year = 1800; $year <= 2026; $year++) {
            Year::create([
                'year' => $year,
            ]);
        }
    }
}

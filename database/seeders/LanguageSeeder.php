<?php

namespace Database\Seeders;


use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            ['name' => 'Türkmen dili'],
            ['name' => 'Iňlis dili'],
            ['name' => 'Rus dili'],
            ['name' => 'Arap dili'],
            ['name' => 'Türk dili'],
            ['name' => 'Italýan dili'],
            ['name' => 'Nemes dili'],
            ['name' => 'Ispan dili'],
            ['name' => 'Fransuz dili'],
            ['name' => 'Hytaý dili'],
            ['name' => 'Ýapon dili'],
            ['name' => 'Koreý dili'],
            ['name' => 'Pars dili'],
            ['name' => 'Ozbek dili'],
            ['name' => 'Gazak dili'],
            ['name' => 'Azerbaýjan dili'],
        ];

        foreach ($languages as $language) {
            Language::create($language);
        }
    }
}

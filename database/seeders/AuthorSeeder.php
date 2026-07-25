<?php

namespace Database\Seeders;

use App\Models\Author;

use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            [
                'name' => 'Berdi', 
                'surname' => 'Kerbabayew', 
                'birth_date' => '1894-03-15',
                'death_date' => '1974-07-23',
                'bio' => 'Türkmen edebiýatynyň klasigi, ýazyjy we şahyr.',
            ],
            [
                'name' => 'Magtymguly', 
                'surname' => 'Pyragy', 
                'birth_date' => '1724-01-01',
                'bio' => 'Beýik türkmen şahyry we mutpakkir.',
            ],
            [
                'name' => 'Robert', 
                'surname' => 'Kiiosaki', 
                'birth_date' => '1947-04-08',
                'bio' => 'Amerikan telekeçisi, maýadar we ýazyjy.',
            ],
            [
                'name' => 'Hydyr', 
                'surname' => 'Deryayew', 
                'birth_date' => '1905-01-01',
                'bio' => 'Türkmen ýazyjysy, prozaçy we dramaturg.'
            ],
            [
                'name' => 'George', 
                'surname' => 'Samuel', 
                'birth_date' => '1874-01-01',
                'bio' => 'Amerikan ýazyjysy, "Iň baý adam Bagdatda" kitabynyň awtory.',
            ],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}

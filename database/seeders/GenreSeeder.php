<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Fiksi',
            'description' => 'Cerita imajinatif yang tidak sepenuhnya berdasarkan kenyataan.'
        ]);

        Genre::create([
            'name' => 'Fantasi',
            'description' => 'Genre dengan unsur sihir, dunia lain, atau makhluk mitologi.'
        ]);

        Genre::create([
            'name' => 'Romance',
            'description' => 'Berfokus pada kisah cinta dan hubungan emosional antar tokoh.'
        ]);
    }
}

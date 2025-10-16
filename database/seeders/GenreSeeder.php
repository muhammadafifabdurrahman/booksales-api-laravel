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
        Genre::create([
            'name' => 'Misteri',
            'description' => 'Bercerita tentang pemecahan kasus atau rahasia yang sulit ditebak.'
        ]);
        Genre::create([
            'name' => 'Biografi',
            'description' => 'Mengulas perjalanan hidup tokoh nyata dan pengalaman pentingnya.'
        ]);
    }
}

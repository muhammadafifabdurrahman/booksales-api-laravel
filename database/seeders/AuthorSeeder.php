<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Ahmad Ramadhan',
            'bio' => 'Penulis novel petualangan dan perjalanan spiritual.',
            'photo' => 'ahmad.jpg',
        ]);

        Author::create([
            'name' => 'Siti Lestari',
            'bio' => 'Penulis fiksi dengan nuansa keluarga dan drama kehidupan.',
            'photo' => 'siti.jpg.',
        ]);

        Author::create([
            'name' => 'Dimas Pratama',
            'bio' => 'Spesialis cerita fantasi dan dunia imajinatif.',
            'photo' => 'dimas.jpg',
        ]);

        Author::create([
            'name' => 'Rina Amelia',
            'bio' => 'Penulis kisah romansa dan kehidupan remaja.',
            'photo' => 'rina.jpg',
        ]);

        Author::create([
            'name' => 'Bagus Santoso',
            'bio' => 'Penulis thriller dan misteri dengan alur menegangkan.',
            'photo' => 'bagus.jpg',
        ]);
    }
}

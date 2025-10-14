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
            'motto' => 'Menulis adalah perjalanan tanpa akhir.',
        ]);

        Author::create([
            'name' => 'Siti Lestari',
            'bio' => 'Penulis fiksi dengan nuansa keluarga dan drama kehidupan.',
            'motto' => 'Cerita terbaik lahir dari hati yang tulus.',
        ]);

        Author::create([
            'name' => 'Dimas Pratama',
            'bio' => 'Spesialis cerita fantasi dan dunia imajinatif.',
            'motto' => 'Imajinasi adalah pintu ke dunia lain.',
        ]);

        Author::create([
            'name' => 'Rina Amelia',
            'bio' => 'Penulis kisah romansa dan kehidupan remaja.',
            'motto' => 'Setiap kata punya rasa.',
        ]);

        Author::create([
            'name' => 'Bagus Santoso',
            'bio' => 'Penulis thriller dan misteri dengan alur menegangkan.',
            'motto' => 'Misteri dimulai saat pintu ditutup.',
        ]);
    }
}

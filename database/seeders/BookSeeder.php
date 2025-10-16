<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Pulang',
            'description' => 'Kisah Bujang masuk dunia gelap dan membangun kekuasaan.',
            'price' => 55000,
            'stock' => 5,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1,
        ]);

        Book::create([
            'title' => 'Pergi',
            'description' => 'Bujang melanjutkan hidupnya setelah kehilangan besar.',
            'price' => 55000,
            'stock' => 4,
            'cover_photo' => 'pergi.jpg',
            'genre_id' => 2,
            'author_id' => 2,
        ]);

         Book::create([
            'title' => 'Pulang Pergi',
            'description' => 'ujang menghadapi konflik dua dunia dan jati diri.',
            'price' => 65000,
            'stock' => 3,
            'cover_photo' => 'pulang_pergi.jpg',
            'genre_id' => 3,
            'author_id' => 3,
        ]);

         Book::create([
            'title' => 'Laskar Pelangi',
            'description' => 'Anak-anak Belitung berjuang meraih mimpi lewat pendidikan.',
            'price' => 45000,
            'stock' => 2,
            'cover_photo' => 'laskar_pelangi.jpg',
            'genre_id' => 1,
            'author_id' => 1,
        ]);

        Book::create([
            'title' => 'Atomic Habits',
            'description' => 'Cara membentuk kebiasaan baik lewat perubahan kecil.',
            'price' => 70000,
            'stock' => 1,
            'cover_photo' => 'atomic_habits.jpg',
            'genre_id' => 2,
            'author_id' => 2,
        ]);
        
    }
}

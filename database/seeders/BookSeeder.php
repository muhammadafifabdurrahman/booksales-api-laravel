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
        ]);

        Book::create([
            'title' => 'Pergi',
            'description' => 'Bujang melanjutkan hidupnya setelah kehilangan besar.'
        ]);

         Book::create([
            'title' => 'Pulang Pergi',
            'description' => 'ujang menghadapi konflik dua dunia dan jati diri.'
        ]);

         Book::create([
            'title' => 'Laskar Pelangi',
            'description' => 'Anak-anak Belitung berjuang meraih mimpi lewat pendidikan.'
        ]);

        Book::create([
            'title' => 'Atomic Habits',
            'description' => 'Cara membentuk kebiasaan baik lewat perubahan kecil.'
        ]);
        
    }
}

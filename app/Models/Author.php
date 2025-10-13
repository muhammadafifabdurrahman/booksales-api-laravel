<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
    [
        'name' => 'Ahmad Ramadhan',
        'bio' => 'Penulis novel petualangan dan perjalanan spiritual.',
        'motto' => 'Menulis adalah perjalanan tanpa akhir.',
        'photo' => 'ahmad.jpg',
        'author_id' => 1,
    ],
    [
        'name' => 'Siti Lestari',
        'bio' => 'Penulis fiksi dengan nuansa keluarga dan drama kehidupan.',
        'motto' => 'Cerita terbaik lahir dari hati yang tulus.',
        'photo' => 'siti.jpg',
        'author_id' => 2,
    ],
    [
        'name' => 'Dimas Pratama',
        'bio' => 'Spesialis cerita fantasi dan dunia imajinatif.',
        'motto' => 'Imajinasi adalah pintu ke dunia lain.',
        'photo' => 'dimas.jpg',
        'author_id' => 3,
    ],
    [
        'name' => 'Rina Amelia',
        'bio' => 'Penulis kisah romansa dan kehidupan remaja.',
        'motto' => 'Setiap kata punya rasa.',
        'photo' => 'rina.jpg',
        'author_id' => 4,
    ],
    [
        'name' => 'Bagus Santoso',
        'bio' => 'Penulis thriller dan misteri dengan alur menegangkan.',
        'motto' => 'Misteri dimulai saat pintu ditutup.',
        'photo' => 'bagus.jpg',
        'author_id' => 5,
    ],
];

    public function getAuthors() {
        return $this->authors;
    }
}

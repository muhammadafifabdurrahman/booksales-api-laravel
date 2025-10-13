<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    private $books = [
        [
            'title' => 'Pergi',
            'description' => 'Petualangan seorang pemuda yang menjadi orang kaga danta',
            'price' => 40000,
            'stock' => 50,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id'=> 1
        ],
        [
            'title' => 'Pulang',
            'description' => 'Petualangan seorang pemuda yang kembali menjadi orang shalih',
            'price' => 50000,
            'stock' => 50,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 2,
            'author_id'=> 2
        ],
        [
            'title' => 'Final',
            'description' => 'Petualangan seorang pemuda yang meninggal dalam keadaan khusnul khatimah',
            'price' => 55000,
            'stock' => 50,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 3,
            'author_id'=> 3
        ],
    ];

    public function getBooks() {
        return $this->books;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
     private $genres = [
    [
        'name' => 'Fiksi',
        'description' => 'Cerita imajinatif yang tidak sepenuhnya berdasarkan kenyataan.',
        'genre_id' => 1
    ],
    [
        'name' => 'Fantasi',
        'description' => 'Genre dengan unsur sihir, dunia lain, atau makhluk mitologi.',
        'genre_id' => 2
    ],
    [
        'name' => 'Romance',
        'description' => 'Berfokus pada kisah cinta dan hubungan emosional antar tokoh.',
        'genre_id' => 3
    ],
    [
        'name' => 'Misteri',
        'description' => 'Mengangkat teka-teki, penyelidikan, atau kejahatan.',
        'genre_id' => 4
    ],
    [
        'name' => 'Sejarah',
        'description' => 'Cerita atau kajian berdasarkan kejadian masa lalu.',
        'genre_id' => 5
    ],
];

    public function getGenres() {
        return $this->genres;
    }
}

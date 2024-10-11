<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        Genre::create([
            'name' => 'Action',
            'slug' => 'action',
        ]);

        Genre::create([
            'name' => 'Adventure',
            'slug' => 'adventure',
        ]);

        Genre::create([
            'name' => 'Comedy',
            'slug' => 'comedy',
        ]);

        Genre::create([
            'name' => 'Drama',
            'slug' => 'drama',
        ]);

        Genre::create([
            'name' => 'Horror',
            'slug' => 'horror',
        ]);

        Genre::create([
            'name' => 'Science Fiction',
            'slug' => 'science-fiction',
        ]);

        Genre::create([
            'name' => 'Fantasy',
            'slug' => 'fantasy',
        ]);

        Genre::create([
            'name' => 'Romance',
            'slug' => 'romance',
        ]);

        Genre::create([
            'name' => 'Thriller',
            'slug' => 'thriller',
        ]);

        Genre::create([
            'name' => 'Animation',
            'slug' => 'animation',
        ]);
    }
}

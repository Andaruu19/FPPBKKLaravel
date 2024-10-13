<?php
namespace Database\Seeders;

use App\Models\Album;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    public function run()
    {
        Album::factory()
            ->count(5)
            ->create()
            ->each(function ($album) {
                $movies = Movie::factory()->count(3)->create();

                $album->movies()->attach($movies->pluck('id')->toArray());
            });
    }
}

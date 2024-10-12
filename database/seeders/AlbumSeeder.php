<?php
namespace Database\Seeders;

use App\Models\Album;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    public function run()
    {
        // Membuat 5 album
        Album::factory()
            ->count(5)
            ->create()
            ->each(function ($album) {
                // Setiap album mendapatkan 3 film secara acak
                $movies = Movie::factory()->count(3)->create();

                // Menghubungkan album dengan film di tabel pivot
                $album->movies()->attach($movies->pluck('id')->toArray());
            });
    }
}

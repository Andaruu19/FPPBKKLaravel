<?php
namespace Database\Factories;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    // Tentukan model yang terkait dengan factory ini
    protected $model = Album::class;

    /**
     * Mendefinisikan state default untuk album.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,  // Menghasilkan judul album acak
            'slug' => $this->faker->unique()->slug(),
        ];
    }
}

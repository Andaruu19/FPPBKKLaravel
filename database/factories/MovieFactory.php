<?php

namespace Database\Factories;

use App\Models\Actor;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         $imageFiles = File::files(public_path('images/moviebg'));

         $randomImage = $imageFiles[array_rand($imageFiles)];

         $imagePath = 'images/moviebg/' . $randomImage->getFilename();

        return [
            'title' => $this->faker->word(3, false),
            'slug' => $this->faker->unique()->slug(),
            'imagepath' => $imagePath,
            'year' => $this->faker->numberBetween(2010, 2024),
            'description' => $this->faker->sentence(10),
            'genre_id' => Genre::factory(),
            'actor_id' => Actor::factory(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Actor;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'title' => $this->faker->word(3, false),
            'slug' => $this->faker->unique()->slug(),
            'year' => $this->faker->numberBetween(2010, 2024),
            'description' => $this->faker->sentence(10),
            'genre_id' => Genre::factory(),
            'actor_id' => Actor::factory(),
        ];
    }
}

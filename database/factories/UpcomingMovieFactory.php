<?php

namespace Database\Factories;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class UpcomingMovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title_upcoming' => $this->faker->company,
            'release_month_upcoming' => $this->faker->numberBetween(6, 12),
            'release_day_upcoming' => $this->faker->numberBetween(1, 30),
            'release_year_upcoming' => 2024,
            'links' => 'resources/images/upcoming_image/movie'.$this->faker->numberBetween(1, 7).'.jpg',
            
        ];
    }
}
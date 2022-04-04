<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl($width = 640, $height = 480,'cats'),
            'name' => $this->faker->word,
            'description' => $this->faker->text,
            'releaseYear' => $this->faker->year,
            'director' => $this->faker->name
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text($maxNbChars = 50),
            'content' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'likes' => $this->faker->numberBetween($min = 0, $max = 1000),
            'category_id' => \App\Models\Category::get()->random()->id,
        ];
    }
}

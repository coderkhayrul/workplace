<?php

namespace Database\Factories;

use App\Models\Backend\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence($nbWords = 8, $variableNbWords = true),
            'slug' => fake()->slug(),
            'cat_id' => Category::all()->random()->id,
            'user_id' => 3,
            'shortDes' => fake()->paragraph($nbSentences = 3, $variableNbSentences = true),
            'longdes' => fake()->paragraph($nbSentences = 5, $variableNbSentences = true),
            'document' => fake()->imageUrl($width = 640, $height = 480),
            'price' => fake()->numberBetween($min = 1000, $max = 9000),
            'StartDate' => fake()->dateTimeBetween('this day', '+1 days'),
            'EndDate' => fake()->dateTimeBetween($startDate = 'now', $endDate = '+1 years', $timezone = null),
            'status' => 1,
        ];
    }
}

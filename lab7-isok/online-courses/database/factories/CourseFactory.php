<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{

    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'category' => $this->faker->word,
            'difficulty_level' => $this->faker->randomElement(['beginner','intermediate','advanced']),
            'price' => $this->faker->randomFloat(2, 10, 500),
        ];
    }
}

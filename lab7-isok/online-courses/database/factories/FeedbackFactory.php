<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Feedback;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory extends Factory
{
    protected $model = Feedback::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_id' => Course::factory(),
            'author_name' => $this->faker->name,
            'comment' => $this->faker->sentence,
            'score' => $this->faker->numberBetween(1,10),
            'status' => 'new',
        ];
    }
}

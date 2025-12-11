<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title'       => $this->faker->sentence(3),
            'description' => $this->faker->paragraphs(3, true),
            'ingredients' => implode(', ', $this->faker->words(8)),
            'category_id' => Category::query()->inRandomOrder()->value('id') ?? Category::factory()
        ];
    }
}

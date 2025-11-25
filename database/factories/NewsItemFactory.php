<?php

namespace Database\Factories;

use App\Models\NewsItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<NewsItem>
 */
class NewsItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'image_path' => fake()->imageUrl(640, 480, 'climbing'), // Generates a placeholder URL
            'content' => fake()->paragraphs(3, true),
            'published_at' => fake()->dateTimeBetween('-1 month', 'now'),
        ];
    }
}

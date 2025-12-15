<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ForumPost>
 */
class ForumPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $climbingTopics = [
            'Best approach shoes for wide feet?',
            'Beta for "The Nose" on El Cap?',
            'Anyone want to climb in Joshua Tree next weekend?',
            'Review of the new La Sportiva shoes',
            'How to train lock-off strength?',
            'Mental game tips for lead climbing',
            'Favorite climbing gym in Tokyo?',
            'Cleaning anchors: best practices',
            'Trad gear rack recommendations for beginners',
            'Epic fail on my project today...',
            'Looking for belay partner - 5.10-5.11 range',
            'Rest day activities?',
        ];

        return [
            'user_id' => \App\Models\User::factory(),
            'title' => $this->faker->randomElement($climbingTopics),
            'body' => $this->faker->paragraphs(3, true),
            'created_at' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}

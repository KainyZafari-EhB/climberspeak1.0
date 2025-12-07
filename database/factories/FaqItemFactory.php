<?php

namespace Database\Factories;

use App\Models\FaqItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<FaqItem>
 */
class FaqItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faqs = [
            [
                'question' => 'Do I need my own gear?',
                'answer' => 'No, we offer rental shoes, harnesses, and chalk bags at the front desk. If you have your own gear, you are welcome to use it, but please ensure it meets current safety standards.',
            ],
            [
                'question' => 'Is there an age limit for climbing?',
                'answer' => 'We welcome climbers of all ages! Children under 13 must be supervised by an adult. We also offer youth programs and kids camps during the summer.',
            ],
            [
                'question' => 'How do I get belay certified?',
                'answer' => 'We offer belay tests every hour on the hour. You just need to demonstrate proper knot tying (figure-8 follow-through) and safe belay technique with an ATC or GriGri. If you are new, take our "Intro to Rope Climbing" class!',
            ],
            [
                'question' => 'Can I bring a guest?',
                'answer' => 'Yes! Members get one free guest pass per month. First-time guests will need to sign a waiver and go through a brief facility orientation.',
            ],
            [
                'question' => 'What should I wear?',
                'answer' => 'Wear comfortable athletic clothing that allows for a full range of motion. Tight jeans or baggy clothes that can get caught in equipment are not recommended.',
            ],
            [
                'question' => 'Do you offer lead climbing?',
                'answer' => 'Yes, we have a dedicated lead wall. You must pass a lead certification test to climb on lead. You must have your own lead rope (min 40m) and be comfortable climbing 5.9 or higher.',
            ],
            [
                'question' => 'Are dogs allowed?',
                'answer' => 'We love dogs, but for safety reasons, only service animals are permitted inside the gym area.',
            ],
        ];

        $faq = fake()->randomElement($faqs);

        return [
            'question' => $faq['question'],
            'answer' => $faq['answer'],
        ];
    }
}

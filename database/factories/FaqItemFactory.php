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
            [
                'question' => 'Do you have auto-belays?',
                'answer' => 'Yes, we have 15 auto-belay stations ranging from 5.6 to 5.11 difficulty. They are perfect for training solo or getting a quick workout in.',
            ],
            [
                'question' => 'What is bouldering?',
                'answer' => 'Bouldering is climbing on shorter walls (usually 10-15ft) without ropes or harnesses. Thick crash pads on the floor protect you if you fall. It is a great way to build strength and technique.',
            ],
            [
                'question' => 'How much is a day pass?',
                'answer' => 'A standard day pass is $25. We also offer discounted rates for students, seniors, and military personnel with valid ID. Punch cards and monthly memberships are available for frequent climbers.',
            ],
            [
                'question' => 'Do I need to book in advance?',
                'answer' => 'No booking is required for general climbing! However, we recommend booking in advance for classes, private coaching, and birthday parties to guarantee availability.',
            ],
            [
                'question' => 'Is there a weight limit?',
                'answer' => 'Our auto-belays have a weight range of 25-310 lbs. For top-rope climbing, there is no strict weight limit, but there should not be a significant weight difference between belayer and climber without using a ground anchor.',
            ],
            [
                'question' => 'Can I climb barefoot?',
                'answer' => 'No, for hygiene and safety reasons, climbing shoes must be worn while on the wall. We do not allow climbing in street shoes or barefoot.',
            ],
            [
                'question' => 'Do you have showers and lockers?',
                'answer' => 'Yes, our facility is equipped with full locker rooms, showers, and saunas. Please bring your own lock and towel, or rent them from the front desk.',
            ],
            [
                'question' => 'What is the grading system?',
                'answer' => 'We use the V-scale for bouldering (V0-V17) and the Yosemite Decimal System for ropes (5.5-5.15). Our route setters aim for consistency, but grades can be subjective!',
            ],
            [
                'question' => 'Can I freeze my membership?',
                'answer' => 'Yes, monthly memberships can be frozen for $5/month. This is great if you are injured or traveling. You can unfreeze at any time with no reactivation fee.',
            ],
            [
                'question' => 'Do you sell gear?',
                'answer' => 'Our pro shop stocks a wide selection of climbing shoes, harnesses, chalk, ropes, and apparel from top brands like Petzl, Black Diamond, and La Sportiva.',
            ],
            [
                'question' => 'Is there Wi-Fi?',
                'answer' => 'Yes, free high-speed Wi-Fi is available throughout the gym. We also have a co-working lounge for members who want to work remotely before or after their climb.',
            ],
            [
                'question' => 'Can I teach my friend how to belay?',
                'answer' => 'For safety reasons, we do not allow peer instruction for belaying. Please sign up for our "Learn the Ropes" class to learn from a certified instructor.',
            ],
            [
                'question' => 'What happens if I forget my focused card?',
                'answer' => 'No problem! We can look you up in our system with a photo ID. If you lost your card, we can issue a replacement for a small fee.',
            ],
            [
                'question' => 'Do you host competitions?',
                'answer' => 'We host quarterly bouldering and rope competitions for all skill levels. Check our "Events" page for upcoming dates and registration details.',
            ],
            [
                'question' => 'Is chalk provided?',
                'answer' => 'We sell loose chalk and chalk balls, and rent chalk bags. We ask that you try to keep chalk spills to a minimum to keep the gym clean.',
            ],
        ];

        $faq = fake()->randomElement($faqs);

        return [
            'question' => $faq['question'],
            'answer' => $faq['answer'],
        ];
    }
}

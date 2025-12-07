<?php

namespace Database\Factories;

use App\Models\ClimbingEvent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ClimbingEvent>
 */
class ClimbingEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $events = [
            [
                'title' => 'Intro to Outdoor Climbing',
                'description' => 'Ready to take your skills from the gym to the crag? Join us for a beginner-friendly day at Granite Peak. We will cover safety, gear, and basic outdoor etiquette. Harness and shoes required.',
                'location' => 'Granite Peak, Lower Crag',
            ],
            [
                'title' => 'Friday Night Bouldering Mixer',
                'description' => 'Kick off your weekend with our community mixer! Meet new climbing partners, enjoy some music, and crush some problems. All abilities welcome. Pizza and drinks provided afterwards.',
                'location' => 'Summit Block Gym',
            ],
            [
                'title' => 'Redpoint Project Class',
                'description' => 'Stuck on a plateau? This 4-week course is designed to help you break through your limits. We focus on advanced technique, route reading, and projecting strategies. Ages 16+.',
                'location' => 'Vertical Edge Board',
            ],
            [
                'title' => 'Technique 101: Footwork',
                'description' => 'Good climbing starts with good footwork. Learn how to trust your feet, use edges effectively, and move with precision. This workshop is perfect for those climbing V1-V3.',
                'location' => 'The Boulder Barn',
            ],
            [
                'title' => 'Annual Crag Cleanup',
                'description' => 'Give back to the places we love! We are teaming up with the Local Access Fund to clean up the trails and approach areas at Painted Canyon. Lunch provided for all volunteers.',
                'location' => 'Painted Canyon',
            ],
            [
                'title' => 'Lead Climbing Certification',
                'description' => 'Learn to lead climb safely and confidently. This intensive 6-hour course covers clipping, falling, and lead belaying. Must be top-rope certified to attend.',
                'location' => 'High Point Center',
            ],
            [
                'title' => 'Women\'s Climbing Circle',
                'description' => 'A supportive space for women and non-binary climbers to train, connect, and crush together. Led by experienced female coaches, this monthly meetup focuses on building community and confidence.',
                'location' => 'Summit Block Gym',
            ],
            [
                'title' => 'Crack Climbing Clinic',
                'description' => 'Learn the dark art of crack climbing! From finger locks to hand jams, we will teach you how to ascend fissures of all sizes. Tape gloves protected and highly recommended.',
                'location' => 'Indian Creek Simulator',
            ],
            [
                'title' => 'Yoga for Recovery',
                'description' => 'Sore muscles? Join us for a recovery-focused yoga session designed to release tension in the shoulders, back, and hips. Perfect for active rest days.',
                'location' => 'Zen Den Studio',
            ],
            [
                'title' => 'Multi-Pitch Efficiency Workshop',
                'description' => 'Stop wasting time at belay stations. Learn how to swap leads, organize ropes, and manage your anchor systems efficiently. Prerequisites: Lead certification and outdoor experience.',
                'location' => 'The Tall Wall',
            ],
            [
                'title' => 'Dyno Competition',
                'description' => 'Can you fly? Test your explosive power in our annual Dyno Comp. Rules are simple: jump from the start holds to the finish hold. Furthest distance wins!',
                'location' => 'Bouldering Cave',
            ],
            [
                'title' => 'Route Setting Showcase',
                'description' => 'Watch the setters in action! Come see how new routes are created, test "forerunner" problems, and give feedback to the setting team. Free coffee and donuts.',
                'location' => 'Main Wall',
            ],
            [
                'title' => 'Aid Climbing Basics',
                'description' => 'When free climbing isn\'t an option, aid climbing gets you up the wall. Learn about aiders, daisys, and gear placement for aid progression. A great skill for big walls.',
                'location' => 'The Artificial Crag',
            ],
            [
                'title' => 'Parents & Kids Climb',
                'description' => 'A fun morning for families! Parents learn to belay while kids climb designated routes. Instructors generate games and challenges to keep everyone engaged.',
                'location' => 'Family Zone',
            ],
            [
                'title' => 'Summer Solstice Send Fest',
                'description' => 'Celebrate the longest day of the year with climbing until midnight! glow-in-the-dark holds, DJ sets, and a barbecue. Bring your headlamp!',
                'location' => 'Outdoor Courtyard',
            ],
            [
                'title' => 'Mental Training Seminar',
                'description' => 'Climbing is 90% mental. Join sport psychologist Dr. Miller to learn visualization techniques, fear management, and how to cultivate a flow state.',
                'location' => 'Conference Room B',
            ],
            [
                'title' => 'Nutrition for Peak Performance',
                'description' => 'Learn how to fuel your body for hard training and redpoint attempts. We cover macro-nutrients, supplements, and timing your meals for optimal energy.',
                'location' => 'Cafe Area',
            ],
            [
                'title' => 'Dry Tooling Intro',
                'description' => 'Get ready for ice season by practicing with dry tools on wood and resin holds. Helmet and boots required. Tools provided.',
                'location' => 'Training Dungeon',
            ],
            [
                'title' => 'Advanced Anchor Building',
                'description' => 'Go beyond the basics. Learn to build complex anchors using natural protection, equalize multidirectional forces, and assess rock quality.',
                'location' => 'Trad Paradise',
            ],
            [
                'title' => 'Movie Night: "Free Solo"',
                'description' => 'Join us for a screening of the Oscar-winning documentary. Popcorn and drinks available. Discussion panel to follow.',
                'location' => 'Member Lounge',
            ],
            [
                'title' => 'Gear Swap & Sale',
                'description' => 'Buy, sell, or trade used climbing gear. A great way to score cheap shoes or unload that extra rack. All safety gear must be inspected before sale.',
                'location' => 'Parking Lot',
            ],
        ];

        $event = fake()->randomElement($events);

        return [
            'title' => $event['title'],
            'location' => $event['location'],
            'date' => fake()->dateTimeBetween('+1 week', '+6 months'),
            'description' => $event['description'],
        ];
    }
}

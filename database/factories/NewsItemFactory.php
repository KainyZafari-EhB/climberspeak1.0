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
        $articles = [
            [
                'title' => 'Local Climber Scales "The Titan" Free Solo',
                'content' => "In a stunning display of skill and nerve, local climber Sarah Jenkins conquered 'The Titan', a notorious 5.12c route at Granite Peak, without a rope. The ascent took just under 45 minutes, drawing a crowd of onlookers who watched in breathless silence. Jenkins, a regular at ClimberSpeak events, credited her success to mental training and the support of the community. 'It’s about trusting your feet and finding your flow,' she remarked after reaching the summit.",
            ],
            [
                'title' => 'New Bouldering Gym Opens Downtown',
                'content' => "The city's climbing scene just got a major upgrade with the opening of 'Summit Block', a state-of-the-art bouldering gym in the downtown district. Featuring over 5,000 square feet of climbing surface, the gym offers routes for all skill levels, from V0 beginners to V15 pros. The grand opening this weekend will feature a friendly competition, live music, and free introductory classes for kids and adults.",
            ],
            [
                'title' => 'Annual "Rock the Crag" Festival Announced',
                'content' => "Get your gear ready! The annual 'Rock the Crag' festival is set to return this September. This three-day event celebrates outdoor climbing with guided tours, workshops on anchor building and rescue techniques, and a nighttime film festival. All proceeds from the event will go towards the Local Access Fund to help maintain trails and replace aging bolts at popular climbing spots.",
            ],
            [
                'title' => 'Safety First: Updated Belay Certification Standards',
                'content' => "Starting next month, all local gyms will be adopting the new Universal Belay Standards (UBS) to ensure greater consistency and safety across the sport. The new standards emphasize partner checks, assisted-braking device proficiency, and proper communication calls. Free clinics will be held every Tuesday evening to help climbers get certified under the new system.",
            ],
            [
                'title' => 'Youth Team Crushes Regional Championships',
                'content' => "The ClimberSpeak Youth Team took home the gold at the Regional Bouldering Championships in Denver last weekend. With three climbers placing in the top five, the team secured the overall victory against stiff competition. 'These kids train incredibly hard,' said Coach Mike. 'Their technique and problem-solving skills are years beyond their age.' The team now advances to the Nationals next spring.",
            ],
            [
                'title' => 'Eco-Climbing: Leave No Trace Workshop',
                'content' => "As outdoor climbing grows in popularity, so does the impact on our natural environment. Join us this Saturday for a 'Leave No Trace' workshop led by park rangers and experienced outdoor climbers. We'll discuss minimizing chalk impact, packing out trash, and respecting wildlife habitats. Let's keep our crags clean and accessible for future generations!",
            ],
        ];

        $article = fake()->randomElement($articles);

        return [
            'title' => $article['title'],
            'image_path' => fake()->imageUrl(640, 480, 'climbing'), // Generates a placeholder URL
            'content' => $article['content'],
            'published_at' => fake()->dateTimeBetween('-1 month', 'now'),
        ];
    }
}

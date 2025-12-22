<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\NewsItem;
use App\Models\FaqCategory;
use App\Models\FaqItem;
use App\Models\ClimbingEvent;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Create Admin Account with hashing.
        User::factory()->create([
            'name' => 'Admin User',
            'username' => 'admin',
            'email' => 'admin@ehb.be',
            'password' => Hash::make('Password!321'),
            'is_admin' => true,
        ]);

        // 2. Create 10 Dummy Users
        User::factory(10)->create();

        // 3. Create 5 News Items with specific images
        $newsArticles = [
            [
                'title' => 'Local Climber Scales "The Titan" Free Solo',
                'image_path' => '/images/news/news-1.png',
                'content' => "In a stunning display of skill and nerve, local climber Sarah Jenkins conquered 'The Titan', a notorious 5.12c route at Granite Peak, without a rope. The ascent took just under 45 minutes, drawing a crowd of onlookers who watched in breathless silence. Jenkins, a regular at ClimberSpeak events, credited her success to mental training and the support of the community. 'It's about trusting your feet and finding your flow,' she remarked after reaching the summit.",
                'published_at' => now()->subDays(1),
            ],
            [
                'title' => 'New Bouldering Gym Opens Downtown',
                'image_path' => '/images/news/news-2.png',
                'content' => "The city's climbing scene just got a major upgrade with the opening of 'Summit Block', a state-of-the-art bouldering gym in the downtown district. Featuring over 5,000 square feet of climbing surface, the gym offers routes for all skill levels, from V0 beginners to V15 pros. The grand opening this weekend will feature a friendly competition, live music, and free introductory classes for kids and adults.",
                'published_at' => now()->subDays(3),
            ],
            [
                'title' => 'Annual "Rock the Crag" Festival Announced',
                'image_path' => '/images/news/news-3.png',
                'content' => "Get your gear ready! The annual 'Rock the Crag' festival is set to return this September. This three-day event celebrates outdoor climbing with guided tours, workshops on anchor building and rescue techniques, and a nighttime film festival. All proceeds from the event will go towards the Local Access Fund to help maintain trails and replace aging bolts at popular climbing spots.",
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Safety First: Updated Belay Certification Standards',
                'image_path' => '/images/news/news-4.png',
                'content' => "Starting next month, all local gyms will be adopting the new Universal Belay Standards (UBS) to ensure greater consistency and safety across the sport. The new standards emphasize partner checks, assisted-braking device proficiency, and proper communication calls. Free clinics will be held every Tuesday evening to help climbers get certified under the new system.",
                'published_at' => now()->subDays(7),
            ],
            [
                'title' => 'Youth Team Crushes Regional Championships',
                'image_path' => '/images/news/news-5.png',
                'content' => "The ClimberSpeak Youth Team took home the gold at the Regional Bouldering Championships in Denver last weekend. With three climbers placing in the top five, the team secured the overall victory against stiff competition. 'These kids train incredibly hard,' said Coach Mike. 'Their technique and problem-solving skills are years beyond their age.' The team now advances to the Nationals next spring.",
                'published_at' => now()->subDays(10),
            ],
        ];
        foreach ($newsArticles as $article) {
            NewsItem::create($article);
        }

        // 4. Create 3 FAQ Categories, each containing 3 Questions (Nested creation)
        FaqCategory::factory(3)
            ->has(FaqItem::factory()->count(3), 'items') // 'items' is the relationship name in the Model
            ->create();

        // 5. Create 5 Climbing Events
        ClimbingEvent::factory(5)->create();

        // 6. Create 15 Forum Posts with 3-8 comments each
        \App\Models\ForumPost::factory(15)
            ->has(\App\Models\ForumComment::factory()->count(rand(3, 8)), 'comments')
            ->create();
    }
}

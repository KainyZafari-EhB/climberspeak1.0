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
            [
                'title' => 'The Art of Route Setting: Interview with Chief Setter',
                'content' => "Ever wonder how those plastic puzzles get on the wall? We sat down with Chief Setter Marcus Thorne to discuss the creative process behind route setting. 'It's about movement,' Thorne explains. 'We want to force climbers to think with their bodies.' Read the full interview to learn about hold selection, grading difficulties, and the evolution of indoor climbing.",
            ],
            [
                'title' => 'Gear Review: The New "SendIt" Climbing Shoes',
                'content' => "Are the new SendIt shoes worth the hype? Our gear experts put them to the test on limestone, granite, and plastic. The verdict: an aggressive downturn perfect for overhangs, but surprisingly comfortable for long sessions. Check out our detailed review to see if these should be your next pair of sends.",
            ],
            [
                'title' => 'Nutrition for Climbers: Fueling for the Send',
                'content' => "What you eat can make or break your climbing session. Nutritionist and climber Dr. Emily Chen shares her top tips for pre-climb fueling and post-climb recovery. Learn about the importance of complex carbs, timing your protein intake, and staying hydrated on the wall.",
            ],
            [
                'title' => 'Hidden Gem: Climbing in the Lost Valley',
                'content' => "Just a few hours drive from the city lies the Lost Valley, a relatively unknown climbing area with pristine sandstone towers. We explore the best routes, camping spots, and the ethics of developing new areas. Remember to keep this secret spot clean if you visit!",
            ],
            [
                'title' => 'Community Spotlight: Climbing for a Cause',
                'content' => "Meet the local group utilizing climbing to empower at-risk youth. 'Vertical Horizons' provides mentorship and outdoor experiences to teenagers from underserved communities. See how you can volunteer or donate to support their mission of building confidence through climbing.",
            ],
            [
                'title' => 'Winter Training: Finger Strength Basics',
                'content' => "The off-season is the perfect time to build finger strength. We cover the dos and don'ts of hangboarding, how to prevent pulley injuries, and a simple 4-week protocol to increase your crimp strength. Warning: Consult a physio before starting any intensive finger training.",
            ],
            [
                'title' => 'Legends of the Sport: A Tribute to "Iron" Mike',
                'content' => "The climbing world mourns the loss of 'Iron' Mike, a pioneer of big wall climbing in the 70s. Known for his bold ascents and unshakeable spirit, Mike inspired a generation of climbers. We look back at his most iconic routes and the legacy he leaves behind.",
            ],
            [
                'title' => 'Ice Climbing Season Begins',
                'content' => "Temperatures are dropping, and the waterfalls are freezing! Ice climbing season is officially here. Check out our guide to the best local ice flows, gear rental locations, and safety tips for dealing with objective hazards like falling ice and avalanches.",
            ],
            [
                'title' => 'Yoga for Climbers: Improve Your Flexibility',
                'content' => "High feet? No problem. Yoga instructor and climber Jessica Lee guides us through a 20-minute flow designed specifically to open up hips and shoulders. Regular practice can improve your reach, balance, and recovery time.",
            ],
            [
                'title' => 'Competition Recap: The Fall Cup',
                'content' => "The Fall Cup finals were a nail-biter! With the top three competitors separated by only one zone, it all came down to the final problem. Read our play-by-play recap of the event and see the photo gallery of the most dramatic moments.",
            ],
            [
                'title' => 'Mental Game: Overcoming Fear of Falling',
                'content' => "Fear of falling is natural, but it shouldn't hold you back. Sports psychologist Dr. Alan Grant discusses strategies for managing fear, including exposure therapy and positive visualization. Learn how to take calculated risks and commit to the move.",
            ],
            [
                'title' => 'Access Alert: Peregrine Falcon Closures',
                'content' => "Please be aware that the South Face of Bald Mountain is closed until July 15th for Peregrine Falcon nesting. Respecting these closures is critical for maintaining access to our climbing areas. Rangers will be issuing fines for violations.",
            ],
            [
                'title' => 'Van Life: 1 Year on the Road',
                'content' => "Is living in a van all it's cracked up to be? Climber Mark Twain shares the highs and lows of his first year living the #VanLife. From waking up at the base of El Capitan to dealing with mechanical breakdowns in the desert, read his honest take on the nomadic lifestyle.",
            ],
            [
                'title' => 'New Guidebook Released',
                'content' => "The long-awaited 3rd edition of the 'Local Crags' guidebook is finally here! Featuring over 200 new routes, updated topos, and historical anecdotes, this book is a must-have for any local climber. Pick up your copy at the gym or local gear shop.",
            ],
            [
                'title' => 'Climbing Photography Workshop',
                'content' => "Learn how to capture the action! Award-winning adventure photographer lens_master offers a weekend workshop on composition, lighting, and safety for climbing photography. Bring your camera and your harness.",
            ],
            [
                'title' => 'Adaptive Climbing Clinic Success',
                'content' => "Last weekend's Adaptive Climbing Clinic saw over 50 participants experiencing the joy of climbing, many for the first time. Adapted equipment and specialized belay techniques allowed climbers with various physical disabilities to reach the top.",
            ],
            [
                'title' => 'Sustainability in Gear Manufacturing',
                'content' => "Major climbing brands are shifting towards sustainable materials. We analyze which companies are leading the charge with recycled nylons, eco-friendly dyes, and repair programs. Vote with your wallet for a greener planet.",
            ],
            [
                'title' => 'The Psychology of Projecting',
                'content' => "Why do we obsess over a piece of rock? We delve into the psychology of 'projecting'—the process of working a route near your limit. It's a journey of failure, frustration, and ultimately, elation.",
            ],
            [
                'title' => 'First Ascent Claimed at Ghost Rock',
                'content' => "Rumors are true. The futuristic project at Ghost Rock has seen a First Ascent. Climber 'X' proposed a grade of 5.14d, making it the hardest route in the region. The route, dubbed 'Phantom Limb', features a mono-pocket crux sequence.",
            ]
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

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

        // 3. Create 5 News Items
        NewsItem::factory(5)->create();

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

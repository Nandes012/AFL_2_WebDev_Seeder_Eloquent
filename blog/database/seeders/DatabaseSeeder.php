<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a primary test user (avoid duplicate on re-seed)
        // Use firstOrCreate so running the seeder multiple times doesn't violate unique constraints.
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => \Illuminate\Support\Str::random(10),
            ]
        );

        // Create additional users
        $users = User::factory()->count(5)->create();

        // Create posts and assign them to the created users
        // We create posts and attach a random existing user's id to avoid creating extra users.
        foreach (range(1, 20) as $_) {
            Post::factory()->create([
                'user_id' => $users->random()->id,
            ]);
        }

        // Seed portfolio (projects, skills, experiences)
        $this->call(PortfolioSeeder::class);
    }
}

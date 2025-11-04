<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Carbon;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create some users
        $users = User::factory()->count(2)->create();

        // Create posts for each user
        foreach ($users as $user) {
            Post::factory()->count(3)->create([
                'user_id' => $user->id,
            ]);
        }

        // Create projects and attach to first user
        $firstUser = $users->first();
        Project::create([
            'user_id' => $firstUser->id,
            'title' => 'Personal Portfolio Website',
            'description' => 'A portfolio site built with Laravel and Blade to showcase projects and skills.',
            'tech' => 'Laravel, Blade, TailwindCSS',
            'url' => 'https://example.com',
            'start_date' => '2025-01-01',
            'end_date' => null,
        ]);

        Project::create([
            'user_id' => $firstUser->id,
            'title' => 'Task Manager App',
            'description' => 'A small CRUD app for managing personal tasks.',
            'tech' => 'Laravel, Vue',
            'url' => null,
            'start_date' => '2025-06-01',
            'end_date' => '2025-12-01',
        ]);

        // Create a couple more projects for 2nd user (if exists)
        if ($users->count() > 1) {
            $secondUser = $users->last();
            Project::create([
                'user_id' => $secondUser->id,
                'title' => 'Chatbot Demo',
                'description' => 'A chatbot demo integrating a simple rule-based engine and AI prompts for cooking.',
                'tech' => 'HTML, JavaScript',
                'url' => '',
                'start_date' => '2025-07-01',
                'end_date' => null,
            ]);
        }

        // Projects
        // (Other projects were created above attached to users)
        // Skills
        Skill::create([
            'name' => 'PHP / Laravel',
            'level' => 'Advanced',
            'description' => 'Building web apps using Laravel, Eloquent and Blade.',
        ]);
        Skill::create([
            'name' => 'JavaScript',
            'level' => 'Intermediate',
            'description' => 'Frontend interactions and small SPAs using Vue or plain JS.',
        ]);

        // Experiences
        Experience::create([
            'title' => 'Frontend Developer',
            'company' => 'Acme Corp',
            'start_date' => '2023-05-01',
            'end_date' => '2024-08-01',
            'description' => 'Worked on building responsive UIs and small SPA features.',
        ]);
        Experience::create([
            'title' => 'Backend Developer',
            'company' => 'Example Ltd',
            'start_date' => '2021-02-01',
            'end_date' => '2023-04-01',
            'description' => 'Built APIs and background jobs with Laravel.',
        ]);

        // Additional dummy entries (idempotent)
        Project::firstOrCreate(
            ['title' => 'Random'],
            [
                'description' => 'Random.',
                'tech' => 'PHP, Laravel',
                'url' => '',
                'start_date' => '2025-05-01',
                'end_date' => '2025-06-01',
            ]
        );

        Skill::firstOrCreate(
            ['name' => 'TailwindCSS'],
            [
                'level' => 'Intermediate',
                'description' => 'Utility-first CSS framework used to build responsive UIs quickly.',
            ]
        );

        Experience::firstOrCreate(
            ['title' => 'Random'],
            [
                'company' => 'Random',
                'start_date' => '2025-06-01',
                'end_date' => '2025-08-31',
                'description' => 'Random.',
            ]
        );

        // Two more skills
        Skill::firstOrCreate(
            ['name' => 'JavaScript'],
            [
                'level' => 'Intermediate',
                'description' => 'Building reactive frontend components and small SPAs.',
            ]
        );

        Skill::firstOrCreate(
            ['name' => 'Git & CI'],
            [
                'level' => 'Intermediate',
                'description' => 'Version control, branching strategies and simple CI pipelines.',
            ]
        );

        // Two more experiences
        Experience::firstOrCreate(
            ['title' => 'Random'],
            [
                'company' => 'Randomm',
                'start_date' => '2025-03-01',
                'end_date' => '2025-6-01',
                'description' => 'Random.',
            ]
        );

        Experience::firstOrCreate(
            ['title' => 'Random'],
            [
                'company' => 'Random',
                'start_date' => '2025-01-01',
                'end_date' => '2025-02-01',
                'description' => 'Random.',
            ]
        );
    }
}

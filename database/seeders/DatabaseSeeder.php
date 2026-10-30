<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Create the single user record
        User::create([
            'username' => 'ralph_lanzaderas',
            'full_name' => 'Ralph Allen Lanzaderas',
            'email' => 'ralph@example.com',
        ]);

        // 2. Define dates (Today, Yesterday, Tomorrow)
        $today = now()->toDateString();
        $yesterday = now()->subDay()->toDateString();
        $tomorrow = now()->addDay()->toDateString();

        // 3. Insert at least 8 tasks spanning 3 different dates
        Task::insert([
            ['title' => 'Design Laravel migration schema', 'status' => 'completed', 'task_date' => $yesterday],
            ['title' => 'Review Eloquent query scopes', 'status' => 'completed', 'task_date' => $yesterday],
            ['title' => 'Build Welcome page for today tasks', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Implement Task List page with sorting', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Test Profile page data retrieval', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Write documentation in README.md', 'status' => 'pending', 'task_date' => $tomorrow],
            ['title' => 'Push code to GitHub repository', 'status' => 'pending', 'task_date' => $tomorrow],
            ['title' => 'Deploy Laravel application online', 'status' => 'pending', 'task_date' => $tomorrow],
        ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $challenges = [
            ['title' => 'Daily Logger', 'description' => 'Log defecation every day for a month.', 'required_log_count' => 30, 'points' => 100],
            ['title' => 'Morning Routine', 'description' => 'Log defecation every morning for a week.', 'required_log_count' => 7, 'points' => 20],
            ['title' => 'Night Logger', 'description' => 'Log defecation every night for a week.', 'required_log_count' => 7, 'points' => 20],
            ['title' => 'Weekend Logger', 'description' => 'Log defecation every weekend for a month.', 'required_log_count' => 8], 'points' => 20,
        ];

        foreach ($challenges as $challenge) {
            \App\Models\Challenge::create($challenge);
        }
    }
}

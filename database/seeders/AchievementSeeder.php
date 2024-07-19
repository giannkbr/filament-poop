<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() {
        $achievements = [
            ['title' => 'First Log', 'description' => 'Log your first defecation.', 'required_log_count' => 1, 'points' => 10, 'icon' => 'heroicon-o-gift-top'],
            ['title' => 'Consistent Logger', 'description' => 'Log defecation for 7 consecutive days.', 'required_log_count' => 7, 'points' => 50, 'icon' => 'heroicon-o-gift-top'],
            ['title' => 'Healthy Habits', 'description' => 'Log 30 defecations.', 'required_log_count' => 30, 'points' => 100, 'icon' => 'heroicon-o-gift-top'],
            ['title' => 'Super Logger', 'description' => 'Log 100 defecations.', 'required_log_count' => 100, 'points' => 500, 'icon' => 'heroicon-o-gift-top'],
            ['title' => 'Early Bird', 'description' => 'Log defecation before 6 AM.', 'required_log_count' => 0, 'points' => 20, 'icon' => 'heroicon-o-gift-top'],
            ['title' => 'Night Owl', 'description' => 'Log defecation after 10 PM.', 'required_log_count' => 0, 'points' => 20, 'icon' => 'heroicon-o-gift-top'],
        ];

        foreach ($achievements as $achievement) {
            \App\Models\Achievement::create($achievement);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::insertOrIgnore([
            [
                'user_id' => 1,
                'topic_id' => 1,
            ],
            [
                'user_id' => 1,
                'topic_id' => 3,
            ],
            [
                'user_id' => 1,
                'topic_id' => 4,
            ],
            [
                'user_id' => 1,
                'topic_id' => 5,
            ],
            [
                'user_id' => 1,
                'topic_id' => 7,
            ],
            [
                'user_id' => 1,
                'topic_id' => 8,
            ],
            [
                'user_id' => 1,
                'topic_id' => 9,
            ],
            [
                'user_id' => 1,
                'topic_id' => 10,
            ],
            [
                'user_id' => 1,
                'topic_id' => 11,
            ],
            [
                'user_id' => 1,
                'topic_id' => 12,
            ],
            [
                'user_id' => 1,
                'topic_id' => 13,
            ],
            [
                'user_id' => 1,
                'topic_id' => 14,
            ],
            [
                'user_id' => 1,
                'topic_id' => 15,
            ],
            [
                'user_id' => 1,
                'topic_id' => 16,
            ],
            [
                'user_id' => 1,
                'topic_id' => 17,
            ],
            [
                'user_id' => 1,
                'topic_id' => 18,
            ],
            [
                'user_id' => 1,
                'topic_id' => 20,
            ],
            [
                'user_id' => 1,
                'topic_id' => 21,
            ],
            [
                'user_id' => 1,
                'topic_id' => 22,
            ],
            [
                'user_id' => 1,
                'topic_id' => 23,
            ],
            [
                'user_id' => 1,
                'topic_id' => 24,
            ],
            [
                'user_id' => 1,
                'topic_id' => 25,
            ],
            [
                'user_id' => 1,
                'topic_id' => 29,
            ],
            [
                'user_id' => 1,
                'topic_id' => 30,
            ],
            [
                'user_id' => 1,
                'topic_id' => 31,
            ],
            [
                'user_id' => 1,
                'topic_id' => 33,
            ],
            [
                'user_id' => 1,
                'topic_id' => 35,
            ],
        ]);
    }
}

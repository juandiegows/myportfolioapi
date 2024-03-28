<?php

namespace Database\Seeders;

use App\Models\TopicWorkExperience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicWorkExperienceSeeder extends Seeder
{
    /**
     *             $table->primary(['topic_id', 'work_experience_id']);
     */
    public function run(): void
    {
        TopicWorkExperience::insertOrIgnore([
            [
                'topic_id' => 1,
                'work_experience_id' => 1
            ],
            [
                'topic_id' => 2,
                'work_experience_id' => 1
            ],
            [
                'topic_id' => 3,
                'work_experience_id' => 1
            ],
            [
                'topic_id' => 4,
                'work_experience_id' => 1
            ],
            [
                'topic_id' => 11,
                'work_experience_id' => 2
            ],
            [
                'topic_id' => 5,
                'work_experience_id' => 2
            ],
            [
                'topic_id' => 4,
                'work_experience_id' => 2
            ],
            [
                'topic_id' => 12,
                'work_experience_id' => 2
            ],
            [
                'topic_id' => 13,
                'work_experience_id' => 2
            ],
            [
                'topic_id' => 14,
                'work_experience_id' => 2
            ],
            [
                'topic_id' => 15,
                'work_experience_id' => 2
            ],
            [
                'topic_id' => 16,
                'work_experience_id' => 2
            ],
            [
                'topic_id' => 11,
                'work_experience_id' => 3
            ],
            [
                'topic_id' => 5,
                'work_experience_id' => 3
            ],
            [
                'topic_id' => 4,
                'work_experience_id' => 3
            ],
            [
                'topic_id' => 12,
                'work_experience_id' => 3
            ],
            [
                'topic_id' => 13,
                'work_experience_id' => 3
            ],
            [
                'topic_id' => 14,
                'work_experience_id' => 3
            ],
            [
                'topic_id' => 17,
                'work_experience_id' => 3
            ],
            [
                'topic_id' => 16,
                'work_experience_id' => 3
            ],
            [
                'topic_id' => 2,
                'work_experience_id' => 4
            ],
            [
                'topic_id' => 3,
                'work_experience_id' => 4
            ],
            [
                'topic_id' => 4,
                'work_experience_id' => 4
            ],
            [
                'topic_id' => 18,
                'work_experience_id' => 4
            ],
            [
                'topic_id' => 19,
                'work_experience_id' => 4
            ],
            [
                'topic_id' => 2,
                'work_experience_id' => 5
            ],
            [
                'topic_id' => 3,
                'work_experience_id' => 5
            ],
            [
                'topic_id' => 4,
                'work_experience_id' => 5
            ],
            [
                'topic_id' => 7,
                'work_experience_id' => 5
            ],
            [
                'topic_id' => 19,
                'work_experience_id' => 5
            ],
            [
                'topic_id' => 10,
                'work_experience_id' => 6
            ],
            [
                'topic_id' => 12,
                'work_experience_id' => 6
            ],
            [
                'topic_id' => 1,
                'work_experience_id' => 6
            ],
            [
                'topic_id' => 29,
                'work_experience_id' => 6
            ],
            [
                'topic_id' => 30,
                'work_experience_id' => 6
            ],
            [
                'topic_id' => 31,
                'work_experience_id' => 6
            ],
            [
                'topic_id' => 32,
                'work_experience_id' => 6
            ],
            [
                'topic_id' => 29,
                'work_experience_id' => 7
            ],
            [
                'topic_id' => 1,
                'work_experience_id' => 7
            ],
            [
                'topic_id' => 4,
                'work_experience_id' => 7
            ],
            [
                'topic_id' => 5,
                'work_experience_id' => 7
            ],
            [
                'topic_id' => 10,
                'work_experience_id' => 7
            ],
            [
                'topic_id' => 12,
                'work_experience_id' => 7
            ],
            [
                'topic_id' => 14,
                'work_experience_id' => 7
            ],
            [
                'topic_id' => 17,
                'work_experience_id' => 7
            ],
            [
                'topic_id' => 23,
                'work_experience_id' => 7
            ],
            [
                'topic_id' => 25,
                'work_experience_id' => 7
            ]
        ]);
    }
}

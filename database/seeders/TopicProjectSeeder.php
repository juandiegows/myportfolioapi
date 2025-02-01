<?php
namespace Database\Seeders;

use App\Models\TopicProject;
use Illuminate\Database\Seeder;

class TopicProjectSeeder extends Seeder
{
    /**
     *             $table->primary(['topic_id', 'work_experience_id']);
     */
    public function run(): void
    {
        TopicProject::insertOrIgnore([
            [
                'topic_id'   => 9,
                'project_id' => 1,
            ],
            [
                'topic_id'   => 5,
                'project_id' => 1,
            ],
            [
                'topic_id'   => 8,
                'project_id' => 1,
            ],
            [
                'topic_id'   => 19,
                'project_id' => 1,
            ],
            [
                'topic_id'   => 24,
                'project_id' => 1,
            ],
            [
                'topic_id'   => 25,
                'project_id' => 1,
            ],
            [
                'topic_id'   => 4,
                'project_id' => 2,
            ],
            [
                'topic_id'   => 5,
                'project_id' => 2,
            ],
            [
                'topic_id'   => 10,
                'project_id' => 2,
            ],
            [
                'topic_id'   => 27,
                'project_id' => 2,
            ],
            [
                'topic_id'   => 28,
                'project_id' => 2,
            ],
            [
                'topic_id'   => 29,
                'project_id' => 2,
            ],
            [
                'topic_id'   => 25,
                'project_id' => 2,
            ],
            [
                'topic_id'   => 32,
                'project_id' => 2,
            ],

            [
                'topic_id'   => 4,
                'project_id' => 3,
            ],
            [
                'topic_id'   => 5,
                'project_id' => 3,
            ],
            [
                'topic_id'   => 10,
                'project_id' => 3,
            ],
            [
                'topic_id'   => 29,
                'project_id' => 3
            ],
            [
                'topic_id'   => 25,
                'project_id' => 3,
            ],
            [
                'topic_id'   => 4,
                'project_id' => 4,
            ],
            [
                'topic_id'   => 5,
                'project_id' => 4,
            ],
            [
                'topic_id'   => 10,
                'project_id' => 4,
            ],
            [
                'topic_id'   => 29,
                'project_id' => 4
            ],
            [
                'topic_id'   => 25,
                'project_id' => 4,
            ],
        ]);
    }
}

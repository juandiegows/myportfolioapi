<?php

namespace Database\Seeders;

use App\Models\WorkExperienceRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkExperienceRoleSeeder extends Seeder
{

    public function run(): void
    {
        WorkExperienceRole::insert([
            [
                'work_experience_id' => 1,
                'profession_id' => 1
            ],
            [
                'work_experience_id' => 1,
                'profession_id' => 3
            ],
            [
                'work_experience_id' => 1,
                'profession_id' => 4
            ],
            [
                'work_experience_id' => 2,
                'profession_id' => 1
            ],
            [
                'work_experience_id' => 2,
                'profession_id' => 2
            ],
            [
                'work_experience_id' => 2,
                'profession_id' => 3
            ],
            [
                'work_experience_id' => 2,
                'profession_id' => 4
            ],
            [
                'work_experience_id' => 2,
                'profession_id' => 8
            ],
            [
                'work_experience_id' => 3,
                'profession_id' => 1
            ],
            [
                'work_experience_id' => 3,
                'profession_id' => 2
            ],
            [
                'work_experience_id' => 3,
                'profession_id' => 3
            ],
            [
                'work_experience_id' => 3,
                'profession_id' => 4
            ],
            [
                'work_experience_id' => 3,
                'profession_id' => 8
            ],
            [
                'work_experience_id' => 3,
                'profession_id' => 6
            ],
            [
                'work_experience_id' => 4,
                'profession_id' => 1
            ],
            [
                'work_experience_id' => 5,
                'profession_id' => 1
            ]




        ]);
    }
}
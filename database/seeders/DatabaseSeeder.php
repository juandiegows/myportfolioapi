<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(
            [
                UserSeeder::class,
                ProfessionSeeder::class,
                ProfessionUserSeeder::class,
                TypeTopicSeeder::class,
                MediaSocialSeeder::class,
                MediaSocialUserSeeder::class,
                EducationSeeder::class,
                ServiceSeeder::class,
                ClientSeeder::class,
                TopicSeeder::class,
                ClientTopicSeeder::class,
                LevelSeeder::class,
                WorkExperienceSeeder::class,
                WorkExperienceRoleSeeder::class
            ]
        );
    }
}
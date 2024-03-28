<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Project;
use App\Models\ProjectUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $image = Image::firstOrCreate([
            'name' => "My portfolio",
            'name_spanish' => "Mi portafolio",
            'link' =>  "img/projects/portfolio/portfolio.png",
            'link_900' => "img/projects/portfolio/portfolio-900.png",
            'link_700' => "img/projects/portfolio/portfolio-700.png",
            'link_300' => "img/projects/portfolio/portfolio-300.png",
        ]);

        $project = Project::firstOrCreate([
            'client_id' => null,
            'front_page_id' => $image->id,
            'title' => 'My portfolio',
            'spanish_title' => 'Mi portafolio',
            'short_description' => 'Frontend project made with angular that consumes an api',
            'spanish_short_description' => 'Proyecto frontend hecho con angular que consume una api',
            'description' => '',
            'spanish_description' => '',
            'view_link' => 'https://juandiegows.com/',
            'download_link' => 'https://github.com/juandiegows/myportfolio',
            'video_link' => null,
            'date' => '2024-03-14'
        ]);

        ProjectUser::firstOrCreate([
            'user_id' => 1,
            'project_id' => $project->id
        ]);
    }
}

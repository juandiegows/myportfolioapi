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


        $image = Image::firstOrCreate([
            'name' => "My portfolio",
            'name_spanish' => "Mi portafolio",
            'link' =>  "img/projects/portfolioAPI/portfolioAPI.png",
            'link_900' => "img/projects/portfolioAPI/portfolioAPI-900.png",
            'link_700' => "img/projects/portfolioAPI/portfolioAPI-700.png",
            'link_300' => "img/projects/portfolioAPI/portfolioAPI-300.png",
        ]);

        $project = Project::firstOrCreate([
            'client_id' => null,
            'principal_project_id' =>  $project->id,
            'front_page_id' => $image->id,
            'title' => 'My portfolio API',
            'spanish_title' => 'Mi portafolio API',
            'short_description' => 'API developed with Laravel and MySQL database',
            'spanish_short_description' => 'API desarrollada con Laravel y una base de datos MySQL',
            'description' => '',
            'spanish_description' => '',
            'view_link' => 'https://api.juandiegows.com/api/docs',
            'download_link' => 'https://github.com/juandiegows/myportfolioapi',
            'video_link' => null,
            'date' => '2024-03-14'
        ]);

        ProjectUser::firstOrCreate([
            'user_id' => 1,
            'project_id' => $project->id
        ]);

        $image = Image::firstOrCreate([
            'name' => "To do list",
            'name_spanish' => "Lista por hacer",
            'link' =>  "img/projects/todo/to-do.png",
            'link_900' => "img/projects/todo/to-do.png",
            'link_700' => "img/projects/todo/to-do.png",
            'link_300' => "img/projects/todo/to-do.png",
        ]);

        $project = Project::firstOrCreate([
            'client_id' => null,
            'principal_project_id' =>  null,
            'front_page_id' => $image->id,
            'title' => 'to do list',
            'spanish_title' => 'lista por hacer',
            'short_description' => 'An application to create a to-do list and mark the task done',
            'spanish_short_description' => 'Una aplicacion para crear lista de tarea por hacer y marcar la tarea hecho',
            'description' => '',
            'spanish_description' => '',
            'view_link' => 'https://todo.juandiegows.com',
            'download_link' => 'htthttps://github.com/juandiegows/ToDoListFUAA',
            'video_link' => null,
            'date' => '2024-11-11'
        ]);

        ProjectUser::firstOrCreate([
            'user_id' => 1,
            'project_id' => $project->id
        ]);
    }
}

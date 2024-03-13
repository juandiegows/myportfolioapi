<?php

namespace Database\Seeders;

use App\Models\Profession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profession::insert(
            [
                [
                    "name" => "Web Developer",
                    "name_spanish" => "Desarrollador web"
                ],
                [
                    "name" => "Mobile Developer",
                    "name_spanish" => "Desarrollador móvil"
                ],
                [
                    "name" => "Full Stack Developer",
                    "name_spanish" => "Desarrollador full stack"
                ],
                [
                    "name" => "Backend Developer",
                    "name_spanish" => "Desarrollador backend"
                ],
                [
                    "name" => "Data Analyst",
                    "name_spanish" => "Analista de datos"
                ],
                [
                    "name" => "Vue.js Developer",
                    "name_spanish" => "Desarrollador Vue.js"
                ],
                [
                    "name" => "Angular Developer",
                    "name_spanish" => "Desarrollador Angular"
                ],
                [
                    "name" => ".NET Developer",
                    "name_spanish" => "Desarrollador .NET"
                ],
                [
                    "name" => "UX/UI Designer",
                    "name_spanish" => "Diseñador UX/UI"
                ],
                [
                    "name" => "SENA instructor",
                    "name_spanish" => "instructor SENA"
                ],
            ]

        );
    }
}

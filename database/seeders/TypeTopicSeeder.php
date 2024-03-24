<?php

namespace Database\Seeders;

use App\Models\TypeTopic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        TypeTopic::insertOrIgnore([
            [
                "spanish_name" => "Lenguajes",
                "name" => "Languages"
            ],
            [
                "spanish_name" => "Patrones de diseño",
                "name" => "Design patterns"
            ],
            [
                "spanish_name" => "Libreria",
                "name" => "Libreria"
            ],
            [
                "spanish_name" => "lenguajes de hojas de estilo",
                "name" => "style sheet languages"
            ],
            [
                "spanish_name" => "Lenguaje de etiquetas de hipertexto",
                "name" => "HyperText Markup Language"
            ],
            [
                "spanish_name" => "paradigma de programación",
                "name" => "programming paradigm"
            ],
            [
                "spanish_name" => "Framework",
                "name" => "Framework"
            ],
            [
                "spanish_name" => "Base de datos",
                "name" => "Database"
            ],
            [
                "spanish_name" => "IDE",
                "name" => "IDE"
            ],
            [
                "spanish_name" => "buenas prácticas",
                "name" => "good practices"
            ],
            [
                "spanish_name" => "Sistema operativos",
                "name" => "Operating systems"
            ],
            [
                "spanish_name" => "editor de codigo",
                "name" => "code editor"
            ],
            [
                "spanish_name" => "Entorno de ejecución",
                "name" => "Execution environment"
            ],
            [
                "spanish_name" => "control de versiones",
                "name" => "version control"
            ],
            [
                "spanish_name" => "Servicios web",
                "name" => "Web Services"
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Service::insertOrIgnore([

            [
                "user_id" => 1,
                "title" => "Web Design and Development",
                "spanish_title" => "Diseño y Desarrollo Web",
                "description" => "Customized Web Design and Development, creating modern, intuitive, and search engine optimized (SEO) websites, tailored to each client's needs.",
                "spanish_description" => "Diseño y Desarrollo Web personalizado, creando sitios modernos, intuitivos y optimizados para motores de búsqueda (SEO), adaptados a las necesidades de cada cliente.",
                "active" => true
            ],
            [
                "user_id" => 1,
                "title" => "Mobile Apps",
                "spanish_title" => "Apps Móviles",
                "description" => "Personalized mobile app development for Android, tailored to the client's needs.",
                "spanish_description" => "Desarrollo de aplicaciones móviles personalizada para android, Adaptada a la necesita de cliente.",
                "active" => true
            ],
            [
                "user_id" => 1,
                "title" => "Desktop Development",
                "spanish_title" => "Desarrollo de escritorio",
                "description" => "Customized desktop program development, tailored to each client's needs. I create high-quality, user-friendly desktop programs.",
                "spanish_description" => "Desarrollo de programas de escritorio personalizados, adaptados a las necesidades de cada cliente. Creo programas de escritorio de alta calidad, fáciles de usar.",
                "active" => true
            ],
            [
                "user_id" => 1,
                "title" => "Custom Software",
                "spanish_title" => "Software a la medida",
                "description" => "I create the solution your business needs, including the entire development cycle from requirements analysis to maintenance.",
                "spanish_description" => "Creo la solución que necesita tu negocio, esto incluye todo el ciclo de desarrollo desde al analisis de requerimiento hasta mantenimiento.",
                "active" => true
            ],
            [
                "user_id" => 1,
                "title" => "Classes only spanish",
                "spanish_title" => "Clases",
                "description" => "I provide personal classes for those who need to reinforce knowledge or learn new technologies.",
                "spanish_description" => "Doy clases personales para aquellas personas que necesita reforzar conocimientos o aprender nuevas tecnnologia.",
                "active" => true
            ],
            [
                "user_id" => 1,
                "title" => "Databases",
                "spanish_title" => "Bases de datos",
                "description" => "Creation and administration of databases.",
                "spanish_description" => "Creacion y administrador de bases de datos",
                "active" => true
            ]
        ]);
    }
}

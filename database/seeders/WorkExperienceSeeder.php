<?php

namespace Database\Seeders;

use App\Models\WorkExperience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkExperienceSeeder extends Seeder
{


    public function run(): void
    {
        WorkExperience::insert([
            [
                'user_id' => 1,
                'business' => 'Lazos de dignidad',
                'description' => 'A web page was created in PHP without using a Framework, with object oriented programming and connected to a MySQL database. A section for clients and an administration panel to manage the site were also included.',
                'spanish_description' => 'Se creó una página web en PHP sin utilizar un Framework, con programación orientada a objetos y conectada a una base de datos MySQL. También se incluyó una sección para los clientes y un panel de administración para gestionar el sitio.',
                'start_date' => '2020-05-22',
                'end_date' => '2020-11-30'
            ],
            [
                'user_id' => 1,
                'business' => 'SENA',
                'description' => 'I developed an access control system for a center using C# in Windows Form, an API with ASP.NET and a SQL Server database. In addition, I prepared for a competition using C# for desktop development and Java for mobile application development.',
                'spanish_description' => 'Desarrollé un sistema de control de acceso para un centro usando C# en Windows Form, una API con ASP.NET y una base de datos SQL Server. Además, me preparé para una competencia utilizando C# para desarrollo de escritorio y Java para desarrollo de aplicaciones móviles.',
                'start_date' => '2021-06-01',
                'end_date' => '2021-11-30'
            ],
            [
                'user_id' => 1,
                'business' => 'SENA',
                'description' => 'I prepared for the WorldSkills competition using the following programming languages: C# for the development of web pages, desktop applications and APIs, with the use of the Entities Framework. Perform automated testing with UNIT in C#, use Kotlin to create mobile applications, and JavaScript with the Vue.js Framework for web page development.',
                'spanish_description' => 'Me preparé para la competencia de WorldSkills utilizando los siguientes lenguajes de programación: C# para el desarrollo de páginas web, aplicaciones de escritorio y API, con el uso del framework Entities Framework. Realice pruebas automatizadas con UNIT en C#, utilice Kotlin para crear aplicaciones móviles y JavaScript con el Framework de Vue.js para el desarrollo de páginas web.',
                'start_date' => '2022-02-01',
                'end_date' => '2022-12-30'
            ],
            [
                'user_id' => 1,
                'business' => 'Monnerverse',
                'description' => 'An interactive web page was created using the Vue.js Framework and JavaScript. The page features smooth animations and dynamic styling similar to a PowerPoint presentation, without requiring vertical scrolling to navigate through the content.',
                'spanish_description' => 'Se creó una página web interactiva utilizando el Framework de Vue.js y JavaScript. La página cuenta con animaciones suaves y un estilo dinámico similar al de una presentación de PowerPoint, sin requerir desplazamiento vertical para navegar por el contenido.',
                'start_date' => '2022-10-01',
                'end_date' => '2022-12-30'
            ],
            [
                'user_id' => 1,
                'business' => 'Vittoria Pizzeria',
                'description' => 'I developed an application for a fast food restaurant, specialized in pizza, using Angular, TypeScript and SCSS. The application allows customers to order online and customize their pizzas according to their tastes and preferences',
                'spanish_description' => 'Desarrollé una aplicación para un restaurante de comida rápida, especializado en pizza, utilizando Angular, TypeScript y SCSS. La aplicación permite a los clientes hacer pedidos en línea y personalizar sus pizzas según sus gustos y preferencias',
                'start_date' => '2022-02-01',
                'end_date' => '2022-12-30'
            ]

        ]);
    }
}
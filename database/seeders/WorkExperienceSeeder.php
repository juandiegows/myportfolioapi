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
                'certificate_url' =>  'docs/work/certificates/FundacionLazos 2020.pdf',
                'profession_id' => 3,
                'description' => 'A web page was created in PHP without using a Framework, with object oriented programming and connected to a MySQL database. A section for clients and an administration panel to manage the site were also included.',
                'spanish_description' => 'Se creó una página web en PHP sin utilizar un Framework, con programación orientada a objetos y conectada a una base de datos MySQL. También se incluyó una sección para los clientes y un panel de administración para gestionar el sitio.',
                'start_date' => '2020-05-22',
                'end_date' => '2020-11-30'
            ],
            [
                'user_id' => 1,
                'business' => 'SENA',
                'certificate_url' =>  'docs/work/certificates/SENA 2021.pdf',
                'profession_id' => 3,
                'description' => 'I developed an access control system for a center using C# in Windows Form, an API with ASP.NET and a SQL Server database. In addition, I prepared for a competition using C# for desktop development and Java for mobile application development.',
                'spanish_description' => 'Desarrollé un sistema de control de acceso para un centro usando C# en Windows Form, una API con ASP.NET y una base de datos SQL Server. Además, me preparé para una competencia utilizando C# para desarrollo de escritorio y Java para desarrollo de aplicaciones móviles.',
                'start_date' => '2021-06-01',
                'end_date' => '2021-11-30'
            ],
            [
                'user_id' => 1,
                'business' => 'SENA',
                'certificate_url' =>  'docs/work/certificates/SENA 2022.pdf',
                'profession_id' => 3,
                'description' => 'I prepared for the WorldSkills competition using the following programming languages: C# for the development of web pages, desktop applications and APIs, with the use of the Entities Framework. Perform automated testing with UNIT in C#, use Kotlin to create mobile applications, and JavaScript with the Vue.js Framework for web page development.',
                'spanish_description' => 'Me preparé para la competencia de WorldSkills utilizando los siguientes lenguajes de programación: C# para el desarrollo de páginas web, aplicaciones de escritorio y API, con el uso del framework Entities Framework. Realice pruebas automatizadas con UNIT en C#, utilice Kotlin para crear aplicaciones móviles y JavaScript con el Framework de Vue.js para el desarrollo de páginas web.',
                'start_date' => '2022-02-01',
                'end_date' => '2022-12-30'
            ],
            [
                'user_id' => 1,
                'business' => 'Monnerverse',
                'profession_id' => 6,
                'certificate_url' =>  null,
                'description' => 'An interactive web page was created using the Vue.js Framework and JavaScript. The page features smooth animations and dynamic styling similar to a PowerPoint presentation, without requiring vertical scrolling to navigate through the content.',
                'spanish_description' => 'Se creó una página web interactiva utilizando el Framework de Vue.js y JavaScript. La página cuenta con animaciones suaves y un estilo dinámico similar al de una presentación de PowerPoint, sin requerir desplazamiento vertical para navegar por el contenido.',
                'start_date' => '2022-10-01',
                'end_date' => '2022-12-30'
            ],
            [
                'user_id' => 1,
                'business' => 'Vittoria Pizzeria',
                'certificate_url' =>  null,
                'profession_id' => 7,
                'description' => 'I developed an application for a fast food restaurant, specialized in pizza, using Angular, TypeScript and SCSS. The application allows customers to order online and customize their pizzas according to their tastes and preferences',
                'spanish_description' => 'Desarrollé una aplicación para un restaurante de comida rápida, especializado en pizza, utilizando Angular, TypeScript y SCSS. La aplicación permite a los clientes hacer pedidos en línea y personalizar sus pizzas según sus gustos y preferencias',
                'start_date' => '2022-02-01',
                'end_date' => '2022-12-30'
            ],
            [
                'user_id' => 1,
                'business' => '3Didacticos',
                'certificate_url' =>  'docs/work/certificates/3Didacticos MAYO-SEPTIEMBRE 2023.pdf',
                'profession_id' => 3,
                'description' => 'During my position in this company I worked in 4 projects, 1 project made by wordpress and the 3 projects with laravel with livewire, applying version control and working the team with the agial scrum methodology, I worked both as frontend and backend, where most of the work on the backend side, among the functionality and activities I did, it is worth mentioning that, I worked on the frontend of a page for the marathon, sending mail, best practices, filters and interactive components.',
                'spanish_description' => 'Durante mi puesto en esta empresa trabaje en 4 proyectos, 1 proyecto realizados por wordpress y los 3 proyectos con laravel  con livewire, aplicando control de version y trabajando el equipo con la metodologia agial scrum, trabaje tanto como frontend y backend, donde la mayor parte trabajo del lado del backend, entre las funcionalidad y actividades que hice, cabe resaltas que, trabaje en el frontend de una pagina para el maraton, envio de correo, buenas practicas, filtros y componentes interactivos .',
                'start_date' => '2023-06-01',
                'end_date' => '2023-10-30'
            ],
            [
                'user_id' => 1,
                'business' => 'SENA',
                'certificate_url' =>  'docs/work/certificates/SENA 2023.pdf',
                'profession_id' => 10,
                'description' => 'During my position I taught trainees in mobile application development with android and kotlin, database with sql server and mysql, and teach the basics of php and js programming languages, version control and scrum agile methodology, design patterns and laravel with livewire, web page and api creation with asp.net .netframework and .netcore.',
                'spanish_description' => 'Durante mi puesto enseñe a los aprendices en desarrollos de aplicaciones moviles con android y kotlin, base de datos con sql server y mysql, y enseñar los fundamentos de los lenguajes de programacion php y js, control de version y metodologia agil scrum, patrones de diseños y laravel con livewire, creacion de pagina web y api  con asp.net .netframework  y .netcore.',
                'start_date' => '2023-07-01',
                'end_date' => '2023-11-30'
            ],
            [
                'user_id' => 1,
                'profession_id' => 3,
                'business' => 'Fisla S.A ',
                'certificate_url' =>  null,
                'description' => 'Web developer with blazor with asp.net core PWA, asp.net api management, agile methodology management with azure, resolve incidents, make changes by services now, API Rest management, working with Scrum methodology, Epica, History, Features, and azure version control.',
                'spanish_description' => 'Desarrollador web con blazor con asp.net  core PWA, manejo de api con asp.net, manejo de metodoligía agiles con azure, resolver incidentes, realizar cambios por services now, manejo de API Rest, trabajando con la metodologia Scrum, Epica, Historia, Features, y con el control de versiones de azure.',
                'start_date' => '2023-07-01',
                'end_date' => null
            ],

        ]);
    }
}

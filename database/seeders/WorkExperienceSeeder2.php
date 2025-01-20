<?php
namespace Database\Seeders;

use App\Models\WorkExperience;
use Illuminate\Database\Seeder;

class WorkExperienceSeeder2 extends Seeder
{

    public function run(): void
    {
        WorkExperience::find(1)->update([
            'is_secundary'        => true,
            'spanish_description' => 'Desarrollé una página web en PHP utilizando programación orientada a objetos y conectándola a una base de datos MySQL. La página web incluyó una sección para los clientes y un panel de administración para gestionar el sitio. El desarrollo se llevó a cabo sin utilizar un Framework, lo que me permitió mejorar mis habilidades en programación y diseño web.',
            'description'         => 'I developed a website in PHP using object-oriented programming and connecting it to a MySQL database. The website included a section for clients and an administration panel to manage the site. The development was carried out without using a framework, which allowed me to enhance my programming and web design skills.',
        ]);
        WorkExperience::find(4)->update(['is_secundary' => true]);
        WorkExperience::find(5)->update(['is_secundary' => true]);
        WorkExperience::find(3)->update(['is_secundary' => false, 'parent' => 2]);
        WorkExperience::find(8)
            ->update([
                'is_secundary'        => false,
                'spanish_description' => 'Desarrollador web especializado en Blazor y ASP.NET Core, con experiencia en C#, API Connect, API Management, Swagger y autenticación OIDC. Experto en API REST, metodologías ágiles (Scrum, épicas, historias y features) y herramientas como Azure DevOps y Copilot. Amplia experiencia en resolución de incidentes y gestión de cambios con ServiceNow, asegurando entregables de alta calidad y eficiencia.',
                'description'         => 'Web developer specializing in Blazor and ASP.NET Core, with experience in C#, API Connect, API Management, Swagger, and OIDC authentication. Proficient in API REST, agile methodologies (Scrum, epics, stories, and features), and tools like Azure DevOps and Copilot. Extensive experience in incident resolution and change management with ServiceNow, ensuring high-quality and efficient deliverables.',
            ]);
        WorkExperience::find(7)
            ->update([
                'start_date' => '2023-06-01',
                'end_date' => '2023-11-30',
            ]);
            WorkExperience::find(7)
            ->update([
                'start_date' => '2023-04-17',
                'end_date' => '2023-09-17',
            ]);
        WorkExperience::find(2)
            ->update([
                'is_secundary'        => false,
                'spanish_description' => 'Durante mi puesto, he trabajado en la implementación de aplicaciones utilizando una variedad de
herramientas y tecnologías, como C# en Windows Form, ASP.NET para la API, y una base de datos SQL
Server. Además, como parte de mi preparación para la competencia WorldSkills, he utilizado una amplia
gama de tecnologías para desarrollar aplicaciones de escritorio, móviles y web. En particular, he trabajado
con C# para desarrollar páginas web y aplicaciones de escritorio, utilizando el framework Entity Framework.
También he realizado pruebas automatizadas en C# con UNIT, desarrollado aplicaciones móviles en Kotlin,
y creado páginas web utilizando JavaScript con el Framework de Vue.js.
                <ul>
                    <li>Logré ser Campeón WorldSkills Colombia en la habilidad IT Soluciones de software para negocio.</li>
                    <li>Alcancé a ser Campeón WorldSkills Chile en la habilidad IT Soluciones de software para negocio.</li>
                    <li>Medalla de plata en WorldSkills America.</li>
                    <li>Logré Medalla de Excelencia Worldskills Special Edition en Corea del Sur.</li>
                    <li>Recibí Medalla al Joven Mérito Guajiro.</li>
                </ul>',
                'description'         => 'During my position, I have worked on implementing applications using a variety of tools and technologies, such
as C# on Windows Form, ASP.NET for the API, and a SQL Server database. Additionally, as part of my
preparation for the WorldSkills competition, I have used a wide range of technologies to develop desktop, mobile
and web applications. In particular, I have worked with C# to develop web pages and desktop applications, using
the Entity Framework. I have also done automated tests in C# with UNIT, developed mobile apps in Kotlin, and
built web pages using JavaScript with the Vue.js Framework.    <ul>
                    <li>Became the WorldSkills Colombia Champion in IT Software Solutions for Business.</li>
                    <li>Achieved WorldSkills Chile Champion in IT Software Solutions for Business.</li>
                    <li>Silver Medal in WorldSkills America.</li>
                    <li>Earned the WorldSkills Special Edition Excellence Medal in South Korea.</li>
                    <li>Received the Young Guajiro Merit Medal.</li>
                </ul>',
            ]);

        WorkExperience::insertOrIgnore([
            'id'                  => 9,
            'user_id'             => 1,
            'profession_id'       => 3,
            'logo'                => null,
            'business'            => 'IA TECH COMPANY SAS',
            'description'         => 'Web developer specializing in Laravel, alpine.js  and Livewire, applying version control and collaborating in a team using the Scrum agile methodology. Focused primarily on backend development, delivering efficient and high-quality solutions. In addition, I have experience working with Alpine.js for frontend interactivity and have implemented Laravel Jobs for background tasks, such as scheduling regular updates and performing database operations efficiently.',
            'spanish_description' => 'Desarrollador web especializado en Laravel, alpine.js y Livewire, aplicando control de versiones y colaborando en equipo bajo la metodología ágil Scrum. Enfocado principalmente en el desarrollo backend, entregando soluciones eficientes y de alta calidad. Además, tengo experiencia trabajando con Alpine.js para la interactividad del frontend y he implementado Tareas de Laravel (Jobs) para tareas en segundo plano, como la programación de actualizaciones regulares y la realización eficiente de operaciones en la base de datos.',
            'is_secundary'        => false,
            'start_date'          => '2024-04-01',
            'end_date'            => '2024-12-31',
            'created_at'          => now(),
            'updated_at'          => now(),
        ]);

        WorkExperience::insertOrIgnore([
            'id'            => 11,
            'user_id'       => 1,
            'profession_id' => 3,
            'logo'          => null,
            'business'      => 'MY PORTFOLIO',
            'is_secundary'  => true,
            'start_date'    => '2024-03-01',
            'end_date'      => '2025-03-31',
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);

        WorkExperience::insertOrIgnore([
            'id'            => 12,
            'user_id'       => 1,
            'profession_id' => 11,
            'logo'          => null,
            'business'      => 'TEACHING',
            'is_secundary'  => true,
            'start_date'    => '2023-03-01',
            'end_date'      => '2023-12-31',
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);

        WorkExperience::insertOrIgnore([
            'id'                  => 10,
            'user_id'             => 1,
            'parent'              => 6,
            'business'            => '3Didacticos',
            'certificate_url'     => null,
            'is_secundary'        => false,
            'profession_id'       => 3,
            'description'         => 'During my position in this company I worked in 4 projects, 1 project made by wordpress and the 3 projects with laravel with livewire, applying version control and working the team with the agial scrum methodology, I worked both as frontend and backend, where most of the work on the backend side, among the functionality and activities I did, it is worth mentioning that, I worked on the frontend of a page for the marathon, sending mail, best practices, filters and interactive components.',
            'spanish_description' => 'Durante mi puesto en esta empresa trabaje en 4 proyectos, 1 proyecto realizados por wordpress y los 3 proyectos con laravel  con livewire, aplicando control de version y trabajando el equipo con la metodologia agial scrum, trabaje tanto como frontend y backend, donde la mayor parte trabajo del lado del backend, entre las funcionalidad y actividades que hice, cabe resaltas que, trabaje en el frontend de una pagina para el maraton, envio de correo, buenas practicas, filtros y componentes interactivos .',
            'start_date'          => '2023-12-01',
            'end_date'            => '2024-03-31',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{

    public function run(): void
    {
        Education::insert([
            [
                "user_id" => 1,
                "entity" => "Hugues Manuel Lacouture",
                "title" => "Elementary",
                "spanish_title" => "Primaria",
                "description" => "I studied in an elementary school in Carrizal, where there is still no electricity, internet, nothing technological, the town where Diomedez was born, and despite the lack of technology, I managed to become the champion of IT business software solutions and win a medal of excellence in South Korea...",
                "spanish_description" => "Estudie en una primaria en Carrizal, donde aún no tiene luz, internet, nada tecnologico, el pueblo donde nacio Diomedez, y a pensar de no haber tecnologo me logre convertir en el campeón de IT soluciones de software para negocio y ganar medalla de excelencia en corea del sur..",
                "start_date" => "2006-01-01",
                "end_date" => "2011-12-07",
                'with_certificate' => false,
                "certificate_url" => null
            ],
            [
                "user_id" => 1,
                "entity" => "Hugues Manuel Lacouture",
                "title" => "HighSchool",
                "spanish_title" => "Secundaria",
                "description" => "I studied in high school at Junta until tenth grade, I always ranked first among my classmates and excelled with high honors in school, I wanted to finish but we had to leave my beloved town.",
                "spanish_description" => "Estudio en la secundaria en la Junta hasta decimo grado, siempre ocupe el primero puesto entre mis compañeros y resalte con grandes honores en el colegio, queria terminar pero tuvimos que mundarnos y irme de mi pueblo querido.",
                "start_date" => "2012-01-01",
                "end_date" => "2016-12-07",
                'with_certificate' => false,
                "certificate_url" => null
            ],
            [
                "user_id" => 1,
                "entity" => "Pablo VI",
                "title" => "HighSchool",
                "spanish_title" => "Secundaria",
                "description" => "I graduated from Colegio Pablo VI, in Colombia, La Guajira, Barrancas, I ranked 3rd in the school in the ICFES tests-",
                "spanish_description" => "Me gradue en el colegio Pablo VI, en Colombia, La Guajira, Barrancas, ocupe el 3 puesto del colegio en las pruebas ICFES",
                "start_date" => "2017-01-01",
                "end_date" => "2017-12-07",
                'with_certificate' => true,
                "certificate_url" => ""
            ],
            [
                "user_id" => 1,
                "entity" => "SENA",
                "title" => "CareerTechnology",
                "spanish_title" => "Secundaria",
                "description" => "I performed a technologist in the Analysis and Development of information system, I earned the place to compete in worldskills where he was champion 2 times, worldskills colombia and chile in the skill IT Software solutions for business, and runner-up in worldskills america, and medal of excellence in Worldskills Special Edition in south korea.",
                "spanish_description" => "Realice un tecnologo en el Analisis y Desarrollo de sistema de información, me gane el lugar de competir en worldskills donde fue campeon 2 veces, worldskills colombia y chile en la habilidad IT Soluciones de software para negocios,  y subcampeon en worldskills america, y medalla de excelencia en Worldskills Special Edition en corea del sur",
                "start_date" => "2018-01-01",
                "end_date" => "2022-12-07",
                'with_certificate' => true,
                "certificate_url" => ""
            ],
        ]);
    }
}
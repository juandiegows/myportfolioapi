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

        TypeTopic::insert([
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
            ]
        ]);
    }
}
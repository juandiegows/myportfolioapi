<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        Client::insert([
            [
                'name' => "Lazos de dignidad",
                'description' => "",
                'spanish_description' => "",
                'url_logo' => "img/client/Lazos-dignidad.svg",
                'link_site' => 'https://lazosdedignidad.org/',
                'year' => '2020'
            ],
            [
                'name' => "Vittoria Pizzeria",
                'description' => "",
                'spanish_description' => "",
                'url_logo' => "img/client/vittoria Pizzeria Trattoria.svg",
                'link_site' => 'https://vittoriapizzeriaytrattoria.com/',
                'year' => '2023'
            ]
        ]);
    }
}

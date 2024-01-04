<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::insert([
            [

                "name" => "Juan Diego",
                "last_name" => "Mejia Maestre",
                "email" => "mejiamaestrejuandiego@gmail.com",
                'user_name' => 'juandiegows',
                'password' => '$2y$10$ulFQn8GqJKroxRW0tQ5zZ..mfTXRy.hq25Ep76WraJA2XNXGDj80m',
                //admin
                'created_at' => now(),
                'updated_at' => now(),

                'active' => true,
                'is_principal' => true
            ]
        ]);


        User::insert([
            [

                "name" => "Daniel Felipe",
                "last_name" => "Balasnoa Pinto",
                "email" => "daniel20020710@gmail.com",
                'active' => false,
                'is_principal' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                "name" => "Jose Jorge",
                "last_name" => "Sarmiento Amaya",
                "email" => "sarmientoamayajosejorge@gmail.com",
                'active' => false,
                'is_principal' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                "name" => "Jorge Ivan",
                "last_name" => "Otero Añez",
                "email" => "jiotero759@gmail.com",
                'active' => false,
                'is_principal' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                "name" => "Juan Pablo",
                "last_name" => "Almeida Freyle",
                "email" => "almeidajuan3@gmail.com",
                'active' => false,
                'is_principal' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                "name" => "Dayana",
                "last_name" => "Fuentes",
                "email" => "",
                'active' => false,
                'is_principal' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                "name" => "Jesus",
                "last_name" => "Ortiz",
                "email" => "jesuortiz30@gmail.com",
                'active' => false,
                'is_principal' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                "name" => "Mariluz",
                "last_name" => "Miranda",
                "email" => "mariluzmiranda407@gmail.com",
                'active' => false,
                'is_principal' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

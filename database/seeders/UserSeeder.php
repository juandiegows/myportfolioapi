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
                'active' => true,
                'is_principal' => true
            ]
        ]);
    }
}
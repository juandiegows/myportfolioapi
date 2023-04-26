<?php

namespace Database\Seeders;

use App\Models\ProfessionUser;
use Illuminate\Database\Seeder;

class ProfessionUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProfessionUser::insert([

            ['profession_id' => 1, 'user_id' => 1],
            ['profession_id' => 2, 'user_id' => 1],
            ['profession_id' => 3, 'user_id' => 1],
            ['profession_id' => 4, 'user_id' => 1],
            ['profession_id' => 5, 'user_id' => 1],
            ['profession_id' => 6, 'user_id' => 1],
            ['profession_id' => 7, 'user_id' => 1],
            ['profession_id' => 8, 'user_id' => 1],
            ['profession_id' => 9, 'user_id' => 1],

        ]);
    }
}
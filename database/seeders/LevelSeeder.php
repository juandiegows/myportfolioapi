<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    // $table->id();
    // $table->string('name', 45)->unique();
    // $table->string('spanish_name', 45)->unique();
    public function run(): void
    {
        Level::insertOrIgnore([
            [
                'name' => 'Newbie',
                'spanish_name' => 'Novato'
            ],
            [
                'name' => 'Junior',
                'spanish_name' => 'Junior'
            ],
            [
                'name' => 'Competent',
                'spanish_name' => 'Competente'
            ],
            [
                'name' => 'Senior',
                'spanish_name' => 'Senior'
            ],
            [
                'name' => 'Expert',
                'spanish_name' => 'Experto'
            ],

        ]);
    }
}

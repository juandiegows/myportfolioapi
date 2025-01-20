<?php
namespace Database\Seeders;

use App\Models\Profession;
use Illuminate\Database\Seeder;

class ProfessionSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profession::insertOrIgnore(

            [
                "name"         => "programming teacher",
                "name_spanish" => "Profesor de programación",
            ]
        );
    }
}

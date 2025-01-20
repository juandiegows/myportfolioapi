<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder2 extends Seeder
{

    public function run(): void
    {
        Education::find(4)->update(['is_higher_education' => true]);
        Education::find(5)->update(['is_higher_education' => true]);
    }
}

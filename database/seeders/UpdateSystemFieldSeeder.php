<?php

namespace Database\Seeders;

use App\Action\Helpers\Util;
use App\Models\Visit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UpdateSystemFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Visit::all() as $visit) {
            $visit->system = Util::getOperatingSystem($visit->client);
            $visit->save();
        }
    }
}

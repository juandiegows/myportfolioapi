<?php

namespace Database\Seeders;

use App\Models\Participant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Participant::insert([
            [
                "user_id"=>"1",
                "client_id"=>"1"
            ],
            [
                "user_id"=>"1",
                "client_id"=>"2"
            ],

        ]);
    }
}

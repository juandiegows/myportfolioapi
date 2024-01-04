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
                "user_id" => "1",
                "client_id" => "1"
            ],
            [
                "user_id" => "2",
                "client_id" => "1"
            ],
            [
                "user_id" => "6",
                "client_id" => "1"
            ],
            [
                "user_id" => "7",
                "client_id" => "1"
            ],
            [
                "user_id" => "8",
                "client_id" => "1"
            ],
            [
                "user_id" => "1",
                "client_id" => "2"
            ],
            [
                "user_id" => "3",
                "client_id" => "2"
            ],

        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\ClientTopic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientTopicSeeder extends Seeder
{
    //   $table->foreignIdFor(Client::class)->constrained();
    //         $table->foreignIdFor(Topic::class)->constrained();
    //         $table->text('description')->nullable();
    //         $table->text('spanish_description')->nullable();


    public function run(): void
    {
        ClientTopic::insert([
            [
                'client_id' => 1,
                'topic_id' => 1,
                'description' => null,
                'spanish_description' => null
            ],
            [
                'client_id' => 1,
                'topic_id' => 2,
                'description' => null,
                'spanish_description' => null
            ],
            [
                'client_id' => 1,
                'topic_id' => 3,
                'description' => null,
                'spanish_description' => null
            ],
            [
                'client_id' => 1,
                'topic_id' => 4,
                'description' => null,
                'spanish_description' => null
            ],
            [
                'client_id' => 1,
                'topic_id' => 5,
                'description' => null,
                'spanish_description' => null
            ],
            [
                'client_id' => 1,
                'topic_id' => 6,
                'description' => null,
                'spanish_description' => null
            ],
            [
                'client_id' => 2,
                'topic_id' => 7,
                'description' => null,
                'spanish_description' => null
            ],
            [
                'client_id' => 2,
                'topic_id' => 8,
                'description' => null,
                'spanish_description' => null
            ],
            [
                'client_id' => 2,
                'topic_id' => 9,
                'description' => null,
                'spanish_description' => null
            ],
            [
                'client_id' => 2,
                'topic_id' => 5,
                'description' => null,
                'spanish_description' => null
            ],
            [
                'client_id' => 1,
                'topic_id' => 10,
                'description' => null,
                'spanish_description' => null
            ]
        ]);
    }

}
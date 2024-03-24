<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostTopic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $post =  Post::firstOrCreate(
            [
                "title" => "How to return an HttpStatusCode and a Json at the same time in an API with .net framework?",
                "spanish_title" => "¿Cómo devolver un HttpStatusCode y un Json a la vez en una API con .net framework?",
                "url_image" => "img/posts/HttpStatusCodeframework.png",
                "link" => "https://dev.to/juandiegows/como-devolver-un-httpstatuscode-y-un-json-a-la-vez-en-una-api-con-net-framework-588a",
                "date" => "2022-01-01",
                'user_id' => 1,
                "created_at" => now(),
                "updated_at" => now(),

            ]
        );
      PostTopic::insertOrIgnore([
        [
            'post_id'=>$post->id,
            'topic_id'=>11,
        ],
        [
            'post_id'=>$post->id,
            'topic_id'=>26,
        ],
        [
            'post_id'=>$post->id,
            'topic_id'=>27,
        ],
        [
            'post_id'=>$post->id,
            'topic_id'=>28,
        ],
      ]);
    }
}

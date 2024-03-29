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
        $post = Post::firstOrCreate(
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
                'post_id' => $post->id,
                'topic_id' => 11,
            ],
            [
                'post_id' => $post->id,
                'topic_id' => 26,
            ],
            [
                'post_id' => $post->id,
                'topic_id' => 27,
            ],
            [
                'post_id' => $post->id,
                'topic_id' => 28,
            ],
        ]);

        $post = Post::firstOrCreate(
            [
                "title" => "How to create multilanguage applications with C#?",
                "spanish_title" => "¿Cómo crear aplicaciones multilenguaje con C#?",
                "url_image" => "img/posts/HttpStatusCodeframework.png",
                "link" => "https://dev.to/juandiegows/como-crear-aplicaciones-multilenguaje-con-c-539b",
                "date" => "2021-03-22",
                'user_id' => 1,
                "created_at" => now(),
                "updated_at" => now(),

            ]
        );
        PostTopic::insertOrIgnore([
            [
                'post_id' => $post->id,
                'topic_id' => 11,
            ]
        ]);

        $post = Post::firstOrCreate(
            [
                "title" => "How to get the color that is under the mouse cursor in C#?",
                "spanish_title" => "¿Cómo obtener el color que esta debajo del cursor del mouse en C#?",
                "url_image" => "img/posts/HttpStatusCodeframework.png",
                "link" => "https://dev.to/juandiegows/como-obtener-el-color-que-esta-debajo-del-cursor-del-mouse-21ej",
                "date" => "2021-03-18",
                'user_id' => 1,
                "created_at" => now(),
                "updated_at" => now(),

            ]
        );
        PostTopic::insertOrIgnore([
            [
                'post_id' => $post->id,
                'topic_id' => 11,
            ]
        ]);

        $post = Post::firstOrCreate(
            [
                "title" => "How to make the form size change when the border is \"none\" in C#?",
                "spanish_title" => "¿Cómo hacer que el tamaño del formulario cambie cuando el borde es \"none\" en C#?",
                "url_image" => "img/posts/HttpStatusCodeframework.png",
                "link" => "https://dev.to/juandiegows/como-obtener-el-color-que-esta-debajo-del-cursor-del-mouse-21ej",
                "date" => "2021-03-18",
                'user_id' => 1,
                "created_at" => now(),
                "updated_at" => now(),

            ]
        );
        PostTopic::insertOrIgnore([
            [
                'post_id' => $post->id,
                'topic_id' => 11,
            ]
        ]);
        $post = Post::firstOrCreate(
            [
                "title" => "How to change the color of an SVG image in C#?",
                "spanish_title" => "¿Cómo cambiar el color de una imagen SVG en C#?",
                "url_image" => "img/posts/svgImgcsharp.png",
                "link" => "https://dev.to/juandiegows/como-cambiar-el-color-de-una-imagen-svg-en-c-1j5m",
                "date" => "2021-03-11",
                'user_id' => 1,
                "created_at" => now(),
                "updated_at" => now(),

            ]
        );
        PostTopic::insertOrIgnore([
            [
                'post_id' => $post->id,
                'topic_id' => 11,
            ],
            [
                'post_id' => $post->id,
                'topic_id' => 33,
            ],
        ]);
        $post = Post::firstOrCreate(
            [
                "title" => "How to add a YouTube video in Dev.to?",
                "spanish_title" => "¿Cómo agregar un vídeo de YouTube en Dev.to?",
                "url_image" => "img/posts/svgImgcsharp.png",
                "link" => "https://dev.to/juandiegows/como-insertar-un-video-de-youtube-en-dev-to-3hhm",
                "date" => "2021-03-19",
                'user_id' => 1,
                "created_at" => now(),
                "updated_at" => now(),

            ]
        );
        PostTopic::insertOrIgnore([
            [
                'post_id' => $post->id,
                'topic_id' => 36,
            ],
        ]);
    }
}

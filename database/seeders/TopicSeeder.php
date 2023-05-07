<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $table->id();
        // $table->foreignIdFor(TypeTopic::class)->constrained();
        // $table->string('name', 400)->unique();
        // $table->string('spanish_name', 400)->unique();
        // $table->string('link_image', 400)->nullable();
        // $table->text('description')->nullable();
        // $table->text('spanish_description')->nullable();
        Topic::insert([

            [
                'type_topic_id' => 1,
                'name' => 'PHP',
                'spanish_name' => 'PHP',
                'link_image' => 'img/Languaje/php.svg',
                'description' => 'It is a widely used web programming language. It allows for creating dynamic and customized web applications. It is easy to use and has a large community of developers.',
                'spanish_description' => 'Es un lenguaje de programación web ampliamente utilizado. Permite crear aplicaciones web dinámicas y personalizadas. Es fácil de usar y tiene una gran comunidad de desarrolladores.'
            ],
            [
                'type_topic_id' => 2,
                'name' => 'MVC',
                'spanish_name' => 'MVC',
                'link_image' => null,
                'description' => null,
                'spanish_description' => null
            ],
            [
                'type_topic_id' => 3,
                'name' => 'JQuery',
                'spanish_name' => 'JQuery',
                'link_image' => null,
                'spanish_description' => "jQuery es una biblioteca de JavaScript rápida, pequeña y rica en funciones. Hace que cosas como el recorrido y la manipulación de documentos HTML, el manejo de eventos, la animación y Ajax sean mucho más simples con una API fácil de usar que funciona en una multitud de navegadores.",
                'description' => "jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers."
            ]
        ]);
    }
}
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
                'description' => "It is a software design pattern commonly used to implement user interfaces, data, and control logic.",
                'spanish_description' => "Es un patrón en el diseño de software comúnmente utilizado para implementar interfaces de usuario, datos y lógica de control."
            ],
            [
                'type_topic_id' => 3,
                'name' => 'JQuery',
                'spanish_name' => 'JQuery',
                'link_image' => null,
                'spanish_description' => "jQuery es una biblioteca de JavaScript rápida, pequeña y rica en funciones. Hace que cosas como el recorrido y la manipulación de documentos HTML, el manejo de eventos, la animación y Ajax sean mucho más simples con una API fácil de usar que funciona en una multitud de navegadores.",
                'description' => "jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers."
            ],
            [
                'type_topic_id' => 4,
                'name' => 'CSS',
                'spanish_name' => 'CSS',
                'link_image' => 'img/Languaje/css.svg',
                'spanish_description' => "Es un lenguaje de hojas de estilo en cascada utilizado en el desarrollo web para describir la presentación visual de documentos HTML y XML. Aunque no se considera un lenguaje de programación completo, es esencial para la creación de sitios web modernos y atractivos. Es compatible con todos los navegadores web modernos.",
                'description' => "It's a cascading style sheet language used in web development to describe the visual presentation of HTML and XML documents. While not considered a full programming language, it's essential for creating modern and attractive websites. It's supported by all modern web browsers."
            ],
            [
                'type_topic_id' => 5,
                'name' => 'HTML',
                'spanish_name' => 'HTML',
                'link_image' => 'img/Languaje/html.svg',
                'spanish_description' => "es el componente más básico de la Web. Define el significado y la estructura del contenido web. Además de HTML, generalmente se utilizan otras tecnologías para describir la apariencia/presentación de una página web (CSS) o la funcionalidad/comportamiento (JavaScript).",
                'description' => "it is the most basic component of the Web. Define the meaning and structure of web content. In addition to HTML, other technologies are generally used to describe the appearance/presentation of a web page (CSS) or functionality/behavior (JavaScript)."
            ],
            [
                'type_topic_id' => 6,
                'name' => 'POO',
                'spanish_name' => 'POO',
                'link_image' => null,
                'spanish_description' => "es un paradigma de programación, es decir, un modelo o un estilo de programación que nos da unas guías sobre cómo trabajar con él. Se basa en el concepto de clases y objetos.",
                'description' => "it is a programming paradigm, that is, a model or a programming style that gives us guidelines on how to work with it. It is based on the concept of classes and objects."
            ],

            [
                'type_topic_id' => 7,
                'name' => 'Angular',
                'spanish_name' => 'Angular',
                'link_image' => 'img/Languaje/angular.svg',
                'spanish_description' => "Es un framework de JavaScript para crear aplicaciones web y móviles híbridas. Utiliza TypeScript para una mayor eficiencia y es altamente escalable. Tiene una gran comunidad de desarrolladores y herramientas para el desarrollo moderno.",
                'description' => "It's a JavaScript framework for building web and hybrid mobile applications. It uses TypeScript for greater efficiency and is highly scalable. It has a large community of developers and modern development tools."
            ],
            [
                'type_topic_id' => 1,
                'name' => 'TypeScript ',
                'spanish_name' => 'TypeScript',
                'link_image' => null,
                'spanish_description' => "TypeScript es un lenguaje de programación desarrollado por Microsoft que se basa en JavaScript. Es un superconjunto de JavaScript, lo que significa que cualquier código JavaScript existente es válido en TypeScript. Sin embargo, TypeScript agrega características adicionales y proporciona herramientas para el desarrollo más robusto y escalable de aplicaciones.",
                'description' => "TypeScript is a programming language developed by Microsoft that is based on JavaScript. It is a superset of JavaScript, which means that any existing JavaScript code is valid in TypeScript. However, TypeScript adds additional features and provides tools for more robust and scalable application development."
            ],
            [
                'type_topic_id' => 4,
                'name' => 'SCSS',
                'spanish_name' => 'SCSS',
                'link_image' => null,
                'spanish_description' => "SCSS, o \"Sassy CSS\", es una extensión del lenguaje CSS (Cascading Style Sheets) que agrega características y funcionalidades adicionales al CSS tradicional. SCSS se basa en el preprocesador Sass (Syntactically Awesome Style Sheets) y comparte una sintaxis similar, pero con algunas diferencias.",
                'description' => "   SCSS, or \"Sassy CSS\", is an extension to the CSS (Cascading Style Sheets) language that adds additional features and functionality to traditional CSS. SCSS is based on the Sass (Syntactically Awesome Style Sheets) preprocessor and shares a similar syntax, but with some differences."
            ],
            [
                'type_topic_id' => 8,
                'name' => 'MySQL',
                'spanish_name' => 'MySQL',
                'link_image' => null,
                'spanish_description' => "MySQL es un sistema de gestión de bases de datos relacionales (RDBMS) de código abierto ampliamente utilizado. Fue desarrollado originalmente por MySQL AB y ahora es propiedad de Oracle Corporation.",
                'description' => "MySQL is a widely used open source relational database management system (RDBMS). It was originally developed by MySQL AB and is now owned by Oracle Corporation."
            ]
        ]);
    }
}
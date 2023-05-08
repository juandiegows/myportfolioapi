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
                'link_image' => 'img/php.svg',
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
                'link_image' => 'img/css.svg',
                'spanish_description' => "Es un lenguaje de hojas de estilo en cascada utilizado en el desarrollo web para describir la presentación visual de documentos HTML y XML. Aunque no se considera un lenguaje de programación completo, es esencial para la creación de sitios web modernos y atractivos. Es compatible con todos los navegadores web modernos.",
                'description' => "It's a cascading style sheet language used in web development to describe the visual presentation of HTML and XML documents. While not considered a full programming language, it's essential for creating modern and attractive websites. It's supported by all modern web browsers."
            ],
            [
                'type_topic_id' => 5,
                'name' => 'HTML',
                'spanish_name' => 'HTML',
                'link_image' => 'img/html.svg',
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
                'link_image' => 'img/angular.svg',
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
            ],
            [
                'type_topic_id' => 1,
                'name' => 'C#',
                'spanish_name' => 'C#',
                'link_image' => 'img/Csharp.svg',
                'spanish_description' => "Es un lenguaje de programación orientado a objetos y de propósito general desarrollado por Microsoft. Se utiliza principalmente para desarrollar aplicaciones de escritorio, móviles, web y juegos. C# se basa en el marco .NET y ofrece características avanzadas como la recolección automática de basura y la administración de memoria.",
                'description' => "It is an object-oriented, general-purpose programming language developed by Microsoft. It is primarily used to develop desktop, mobile, web, and game applications. C# is based on the .NET framework and offers advanced features such as automatic garbage collection and memory management."
            ],
            [
                'type_topic_id' => 1,
                'name' => 'Javascript',
                'spanish_name' => 'Javascript',
                'link_image' => 'img/js.svg',
                'spanish_description' => "Es un lenguaje de programación utilizado para desarrollar aplicaciones web interactivas. Se ejecuta en el navegador del usuario y agrega interactividad a las páginas web. Es esencial para cualquier desarrollador web moderno.",
                'description' => "It is a programming language used to develop interactive web applications. It runs on the user's browser and adds interactivity to web pages. It is essential for any modern web developer."
            ],
            [
                'type_topic_id' => 8,
                'name' => 'SQL Server',
                'spanish_name' => 'SQL Server',
                'link_image' => null,
                'spanish_description' => "Es un RDBMS creado por Microsoft para la gestión y análisis de datos. Proporciona características como soporte para transacciones, consultas complejas y seguridad de datos. Ampliamente utilizado en empresas para almacenar y analizar grandes cantidades de datos.",
                'description' => "It is an RDBMS created by Microsoft for data management and analysis. It provides features like support for transactions, complex queries, and data security. Widely used in companies to store and analyze large amounts of data."
            ],
            [
                'type_topic_id' => 9,
                'name' => 'Android Studio',
                'spanish_name' => 'Android Studio',
                'link_image' => null,
                'spanish_description' => "Es el IDE oficial para el desarrollo de aplicaciones Android, creado por Google. Proporciona un editor de código, un depurador y emuladores de dispositivos, entre otras herramientas. Es compatible con Java, Kotlin y otros lenguajes de programación.",
                'description' => "It is the official IDE for the development of Android applications, created by Google. It provides a code editor, a debugger, and device emulators, among other tools. It supports Java, Kotlin, and other programming languages."
            ],
            [
                'type_topic_id' => 1,
                'name' => 'Java',
                'spanish_name' => 'Java',
                'link_image' => null,
                'spanish_description' => "Es un lenguaje de programación orientado a objetos utilizado para desarrollar aplicaciones empresariales, móviles y juegos. Se basa en la máquina virtual Java (JVM) para la portabilidad y ofrece características de alto nivel como la recolección automática de basura y el manejo de excepciones",
                'description' => "It is an object-oriented programming language used to develop enterprise, mobile, and game applications. It is based on the Java Virtual Machine (JVM) for portability and offers high-level features such as automatic garbage collection and exception handling."
            ],
            [
                'type_topic_id' => 9,
                'name' => 'Visual Studio',
                'spanish_name' => 'Visual Studio',
                'link_image' => null,
                'spanish_description' => "Es un IDE de Microsoft. Ofrece herramientas para desarrollar aplicaciones en varias plataformas y lenguajes. Es utilizado por desarrolladores para crear aplicaciones de escritorio, web y móviles.",
                'description' => "It's a Microsoft IDE. It offers tools for developing applications on multiple platforms and languages. It's used by developers to create desktop, web, and mobile applications."
            ],
            [
                'type_topic_id' => 1,
                'name' => 'Kotlin',
                'spanish_name' => 'Kotlin',
                'link_image' => null,
                'spanish_description' => "Es un lenguaje de programación utilizado para desarrollar aplicaciones para Android, servidores y la web. Es seguro, interoperable y conciso. Compatible con las herramientas de desarrollo populares y una comunidad en crecimiento.",
                'description' => "It's a programming language used for developing Android, server, and web applications. It's safe, interoperable, and concise. It's compatible with popular development tools and has a growing community."
            ],
            [
                'type_topic_id' => 7,
                'name' => 'Vue.js',
                'spanish_name' => 'Vue.js',
                'link_image' => 'img/vue.svg',
                'spanish_description' => "Es un framework de JavaScript para construir interfaces de usuario interactivas y aplicaciones de una sola página. Proporciona un enfoque basado en componentes para la creación de aplicaciones web, lo que permite una mayor modularidad y reutilización de código. Es altamente adaptable y fácil de integrar con otras bibliotecas de JavaScript.",
                'description' => "It's a JavaScript framework for building interactive user interfaces and single-page applications. It provides a component-based approach to web application development, allowing for greater modularity and code reuse. It's highly adaptable and easy to integrate with other JavaScript libraries."
            ],
            [
                'type_topic_id' => 10,
                'name' => 'SEO',
                'spanish_name' => 'SEO',
                'link_image' => null,
                'spanish_description' => "Es un conjunto de técnicas y estrategias utilizadas para optimizar un sitio web y mejorar su visibilidad en los resultados de los motores de búsqueda. ",
                'description' => "It is a set of techniques and strategies used to optimize a website and improve its visibility in search engine results."
            ]
        ]);
    }
}
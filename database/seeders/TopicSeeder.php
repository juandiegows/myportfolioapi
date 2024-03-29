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

        Topic::insertOrIgnore([

            [
                'topic_id' => null,
                'type_topic_id' => 1,
                'name' => 'PHP',
                'spanish_name' => 'PHP',
                'link_image' => 'img/topics/php.svg',
                'description' => 'It is a widely used web programming language. It allows for creating dynamic and customized web applications. It is easy to use and has a large community of developers.',
                'spanish_description' => 'Es un lenguaje de programación web ampliamente utilizado. Permite crear aplicaciones web dinámicas y personalizadas. Es fácil de usar y tiene una gran comunidad de desarrolladores.'
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 2,
                'name' => 'MVC',
                'spanish_name' => 'MVC',
                'link_image' => null,
                'description' => "It is a software design pattern commonly used to implement user interfaces, data, and control logic.",
                'spanish_description' => "Es un patrón en el diseño de software comúnmente utilizado para implementar interfaces de usuario, datos y lógica de control."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 3,
                'name' => 'JQuery',
                'spanish_name' => 'JQuery',
                'link_image' => 'img/topics/jquery-icon.svg',
                'spanish_description' => "jQuery es una biblioteca de JavaScript rápida, pequeña y rica en funciones. Hace que cosas como el recorrido y la manipulación de documentos HTML, el manejo de eventos, la animación y Ajax sean mucho más simples con una API fácil de usar que funciona en una multitud de navegadores.",
                'description' => "jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 4,
                'name' => 'CSS',
                'spanish_name' => 'CSS',
                'link_image' => 'img/topics/css.svg',
                'spanish_description' => "Es un lenguaje de hojas de estilo en cascada utilizado en el desarrollo web para describir la presentación visual de documentos HTML y XML. Aunque no se considera un lenguaje de programación completo, es esencial para la creación de sitios web modernos y atractivos. Es compatible con todos los navegadores web modernos.",
                'description' => "It's a cascading style sheet language used in web development to describe the visual presentation of HTML and XML documents. While not considered a full programming language, it's essential for creating modern and attractive websites. It's supported by all modern web browsers."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 5,
                'name' => 'HTML',
                'spanish_name' => 'HTML',
                'link_image' => 'img/topics/html.svg',
                'spanish_description' => "es el componente más básico de la Web. Define el significado y la estructura del contenido web. Además de HTML, generalmente se utilizan otras tecnologías para describir la apariencia/presentación de una página web (CSS) o la funcionalidad/comportamiento (JavaScript).",
                'description' => "it is the most basic component of the Web. Define the meaning and structure of web content. In addition to HTML, other technologies are generally used to describe the appearance/presentation of a web page (CSS) or functionality/behavior (JavaScript)."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 6,
                'name' => 'POO',
                'spanish_name' => 'POO',
                'link_image' => null,
                'spanish_description' => "es un paradigma de programación, es decir, un modelo o un estilo de programación que nos da unas guías sobre cómo trabajar con él. Se basa en el concepto de clases y objetos.",
                'description' => "it is a programming paradigm, that is, a model or a programming style that gives us guidelines on how to work with it. It is based on the concept of classes and objects."
            ],

            [
                'topic_id' => null,
                'type_topic_id' => 7,
                'name' => 'Angular',
                'spanish_name' => 'Angular',
                'link_image' => 'img/topics/angular.svg',
                'spanish_description' => "Es un framework de JavaScript para crear aplicaciones web y móviles híbridas. Utiliza TypeScript para una mayor eficiencia y es altamente escalable. Tiene una gran comunidad de desarrolladores y herramientas para el desarrollo moderno.",
                'description' => "It's a JavaScript framework for building web and hybrid mobile applications. It uses TypeScript for greater efficiency and is highly scalable. It has a large community of developers and modern development tools."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 1,
                'name' => 'TypeScript ',
                'spanish_name' => 'TypeScript',
                'link_image' => 'img/topics/typescript.svg',
                'spanish_description' => "TypeScript es un lenguaje de programación desarrollado por Microsoft que se basa en JavaScript. Es un superconjunto de JavaScript, lo que significa que cualquier código JavaScript existente es válido en TypeScript. Sin embargo, TypeScript agrega características adicionales y proporciona herramientas para el desarrollo más robusto y escalable de aplicaciones.",
                'description' => "TypeScript is a programming language developed by Microsoft that is based on JavaScript. It is a superset of JavaScript, which means that any existing JavaScript code is valid in TypeScript. However, TypeScript adds additional features and provides tools for more robust and scalable application development."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 4,
                'name' => 'SCSS',
                'spanish_name' => 'SCSS',
                'link_image' => 'img/topics/sass.svg',
                'spanish_description' => "SCSS, o \"Sassy CSS\", es una extensión del lenguaje CSS (Cascading Style Sheets) que agrega características y funcionalidades adicionales al CSS tradicional. SCSS se basa en el preprocesador Sass (Syntactically Awesome Style Sheets) y comparte una sintaxis similar, pero con algunas diferencias.",
                'description' => "   SCSS, or \"Sassy CSS\", is an extension to the CSS (Cascading Style Sheets) language that adds additional features and functionality to traditional CSS. SCSS is based on the Sass (Syntactically Awesome Style Sheets) preprocessor and shares a similar syntax, but with some differences."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 8,
                'name' => 'MySQL',
                'spanish_name' => 'MySQL',
                'link_image' => 'img/topics/mysql.svg',
                'spanish_description' => "MySQL es un sistema de gestión de bases de datos relacionales (RDBMS) de código abierto ampliamente utilizado. Fue desarrollado originalmente por MySQL AB y ahora es propiedad de Oracle Corporation.",
                'description' => "MySQL is a widely used open source relational database management system (RDBMS). It was originally developed by MySQL AB and is now owned by Oracle Corporation."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 1,
                'name' => 'C#',
                'spanish_name' => 'C#',
                'link_image' => 'img/topics/Csharp.svg',
                'spanish_description' => "Es un lenguaje de programación orientado a objetos y de propósito general desarrollado por Microsoft. Se utiliza principalmente para desarrollar aplicaciones de escritorio, móviles, web y juegos. C# se basa en el marco .NET y ofrece características avanzadas como la recolección automática de basura y la administración de memoria.",
                'description' => "It is an object-oriented, general-purpose programming language developed by Microsoft. It is primarily used to develop desktop, mobile, web, and game applications. C# is based on the .NET framework and offers advanced features such as automatic garbage collection and memory management."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 1,
                'name' => 'Javascript',
                'spanish_name' => 'Javascript',
                'link_image' => 'img/topics/js.svg',
                'spanish_description' => "Es un lenguaje de programación utilizado para desarrollar aplicaciones web interactivas. Se ejecuta en el navegador del usuario y agrega interactividad a las páginas web. Es esencial para cualquier desarrollador web moderno.",
                'description' => "It is a programming language used to develop interactive web applications. It runs on the user's browser and adds interactivity to web pages. It is essential for any modern web developer."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 8,
                'name' => 'SQL Server',
                'spanish_name' => 'SQL Server',
                'link_image' => 'img/topics/sql_server.svg',
                'spanish_description' => "Es un RDBMS creado por Microsoft para la gestión y análisis de datos. Proporciona características como soporte para transacciones, consultas complejas y seguridad de datos. Ampliamente utilizado en empresas para almacenar y analizar grandes cantidades de datos.",
                'description' => "It is an RDBMS created by Microsoft for data management and analysis. It provides features like support for transactions, complex queries, and data security. Widely used in companies to store and analyze large amounts of data."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 9,
                'name' => 'Android Studio',
                'spanish_name' => 'Android Studio',
                'link_image' => 'img/topics/android_studio.svg',
                'spanish_description' => "Es el IDE oficial para el desarrollo de aplicaciones Android, creado por Google. Proporciona un editor de código, un depurador y emuladores de dispositivos, entre otras herramientas. Es compatible con Java, Kotlin y otros lenguajes de programación.",
                'description' => "It is the official IDE for the development of Android applications, created by Google. It provides a code editor, a debugger, and device emulators, among other tools. It supports Java, Kotlin, and other programming languages."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 1,
                'name' => 'Java',
                'spanish_name' => 'Java',
                'link_image' => 'img/topics/java.svg',
                'spanish_description' => "Es un lenguaje de programación orientado a objetos utilizado para desarrollar aplicaciones empresariales, móviles y juegos. Se basa en la máquina virtual Java (JVM) para la portabilidad y ofrece características de alto nivel como la recolección automática de basura y el manejo de excepciones",
                'description' => "It is an object-oriented programming language used to develop enterprise, mobile, and game applications. It is based on the Java Virtual Machine (JVM) for portability and offers high-level features such as automatic garbage collection and exception handling."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 9,
                'name' => 'Visual Studio',
                'spanish_name' => 'Visual Studio',
                'link_image' => 'img/topics/visual studio 2022.svg',
                'spanish_description' => "Es un IDE de Microsoft. Ofrece herramientas para desarrollar aplicaciones en varias plataformas y lenguajes. Es utilizado por desarrolladores para crear aplicaciones de escritorio, web y móviles.",
                'description' => "It's a Microsoft IDE. It offers tools for developing applications on multiple platforms and languages. It's used by developers to create desktop, web, and mobile applications."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 1,
                'name' => 'Kotlin',
                'spanish_name' => 'Kotlin',
                'link_image' => 'img/topics/kotlin.svg',
                'spanish_description' => "Es un lenguaje de programación utilizado para desarrollar aplicaciones para Android, servidores y la web. Es seguro, interoperable y conciso. Compatible con las herramientas de desarrollo populares y una comunidad en crecimiento.",
                'description' => "It's a programming language used for developing Android, server, and web applications. It's safe, interoperable, and concise. It's compatible with popular development tools and has a growing community."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 7,
                'name' => 'Vue.js',
                'spanish_name' => 'Vue.js',
                'link_image' => 'img/topics/vue.svg',
                'spanish_description' => "Es un framework de JavaScript para construir interfaces de usuario interactivas y aplicaciones de una sola página. Proporciona un enfoque basado en componentes para la creación de aplicaciones web, lo que permite una mayor modularidad y reutilización de código. Es altamente adaptable y fácil de integrar con otras bibliotecas de JavaScript.",
                'description' => "It's a JavaScript framework for building interactive user interfaces and single-page applications. It provides a component-based approach to web application development, allowing for greater modularity and code reuse. It's highly adaptable and easy to integrate with other JavaScript libraries."
            ],

            [
                'topic_id' => null,
                'type_topic_id' => 10,
                'name' => 'SEO',
                'spanish_name' => 'SEO',
                'link_image' => null,
                'spanish_description' => "Es un conjunto de técnicas y estrategias utilizadas para optimizar un sitio web y mejorar su visibilidad en los resultados de los motores de búsqueda. ",
                'description' => "It is a set of techniques and strategies used to optimize a website and improve its visibility in search engine results."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 8,
                'name' => 'SQLite',
                'spanish_name' => 'SQLite',
                'link_image' => 'img/topics/sqlite.svg',
                'spanish_description' => "Es un motor de base de datos relacional ligero y sin servidor, utilizado para almacenar y administrar datos localmente. Fácil de integrar en aplicaciones, proporciona soporte para transacciones, consultas complejas y seguridad de datos. Compatible con la mayoría de los sistemas operativos.",
                'description' => "It is a lightweight, serverless relational database engine used to store and manage data locally. Easy to integrate into applications, provides support for transactions, complex queries and data security. Compatible with most operating systems."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 9,
                'name' => 'Figma',
                'spanish_name' => 'Figma',
                'link_image' => 'img/topics/figma.svg',
                'spanish_description' => "Es una herramienta basada en la nube para el diseño de UI/UX. Permite la colaboración en tiempo real y la creación de diseños interactivos y prototipos. Proporciona herramientas de diseño vectorial, bibliotecas de componentes reutilizables y una plataforma de colaboración en equipo.",
                'description' => "It's a cloud-based tool for UI/UX design. It allows real-time collaboration and the creation of interactive designs and prototypes. It provides vector design tools, reusable component libraries, and a team collaboration platform."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 11,
                'name' => 'Ubuntu',
                'spanish_name' => 'Ubuntu',
                'link_image' => 'img/topics/ubuntu.svg',
                'spanish_description' => "Es un sistema operativo de código abierto y gratuito, basado en Linux. Fácil de instalar y utilizar, viene con una amplia gama de aplicaciones y herramientas preinstaladas. Popular entre los usuarios de Linux por su facilidad de uso y soporte comunitario activo.",
                'description' => "It's a free and open-source operating system based on Linux. Easy to install and use, it comes with a wide range of pre-installed applications and tools. Popular among Linux users for its ease of use and active community support."
            ],

            [
                'topic_id' => null,
                'type_topic_id' => 12,
                'name' => 'Visual Studio Code',
                'spanish_name' => 'Visual Studio Code',
                'link_image' => 'img/topics/visual studio code.svg',
                'spanish_description' => "Es un editor de código gratuito y multiplataforma de Microsoft. Tiene herramientas avanzadas como Git y autocompletado de código. Es popular entre los desarrolladores por su facilidad de uso y extensiones disponibles.",
                'description' => "It's a free, multi-platform code editor from Microsoft. It has advanced tools like Git and code autocompletion. It's popular among developers for its ease of use and available extensions."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 13,
                'name' => 'Node.js',
                'spanish_name' => 'Node.js',
                'link_image' => 'img/topics/nodejs.svg',
                'spanish_description' => "Es un entorno de tiempo de ejecución de JavaScript construido sobre el motor V8 de Google Chrome. Permite a los desarrolladores ejecutar JavaScript en el lado del servidor para crear aplicaciones web escalables y de alto rendimiento. Node.js cuenta con una gran comunidad y un ecosistema rico en bibliotecas y herramientas.",
                'description' => "It is a JavaScript runtime environment built on the Google Chrome V8 engine. It allows developers to run JavaScript on the server-side to create scalable and high-performance web applications. Node.js has a large community and a rich ecosystem of libraries and tools."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 14,
                'name' => 'Git',
                'spanish_name' => 'Git',
                'link_image' => 'img/topics/git.svg',
                'spanish_description' => "Es un sistema de control de versiones de software utilizado para rastrear los cambios en el código fuente durante el desarrollo de software. Git es altamente eficiente y proporciona una mayor colaboración en equipo y seguimiento de cambios en el código fuente. Es ampliamente utilizado en la industria del desarrollo de software.",
                'description' => "It is a software version control system used to track changes in source code during software development. Git is highly efficient and provides greater team collaboration and tracking of changes in source code. It is widely used in the software development industry."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 7,
                'name' => '.NET Framework',
                'spanish_name' => '.NET Framework',
                'link_image' => 'img/topics/.net.svg',
                'spanish_description' => "El .NET Framework es un entorno de desarrollo de software desarrollado por Microsoft. Proporciona una amplia biblioteca de clases y soporte para varios lenguajes de programación, lo que permite a los desarrolladores crear una variedad de aplicaciones para Windows, web, móviles y dispositivos embebidos. El .NET Framework incluye un entorno de ejecución común (Common Language Runtime - CLR) que administra la ejecución del código y ofrece características como la administración automática de memoria y la seguridad. Además, proporciona herramientas de desarrollo integradas y soporte para servicios web, lo que lo convierte en una plataforma poderosa para el desarrollo de aplicaciones empresariales y de software.",
                'description' => ".NET Framework is a software development framework developed by Microsoft. It provides a vast class library and support for multiple programming languages, enabling developers to create a variety of applications for Windows, web, mobile, and embedded devices. .NET Framework includes a Common Language Runtime (CLR) that manages code execution and offers features such as automatic memory management and security. Additionally, it provides integrated development tools and support for web services, making it a powerful platform for enterprise and software application development."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 7,
                'name' => 'API',
                'spanish_name' => 'API',
                'link_image' => null,
                'spanish_description' => "Una API (Interfaz de Programación de Aplicaciones) es un conjunto de reglas y herramientas que permite a diferentes software interactuar entre sí. Las API pueden ser utilizadas para diversas finalidades, como acceder a funcionalidades de un sistema operativo, de una aplicación de software, o de servicios web. Proporcionan una forma estructurada de comunicación entre diferentes componentes de software, lo que facilita la integración y el desarrollo de aplicaciones.",
                'description' => "An API (Application Programming Interface) is a set of rules and tools that allows different software to interact with each other. APIs can be used for various purposes, such as accessing functionality of an operating system, a software application, or web services. They provide a structured way of communication between different software components, facilitating integration and application development."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 7,
                'name' => 'API REST',
                'spanish_name' => 'API REST',
                'link_image' => null,
                'spanish_description' => "Una API REST (Representational State Transfer) es un estilo de arquitectura para sistemas distribuidos, que se basa en el protocolo HTTP para la comunicación entre clientes y servidores. Las API REST utilizan los métodos estándar de HTTP, como GET, POST, PUT, DELETE, etc., para realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) en recursos, que pueden ser representados como URIs (Identificadores de Recursos Uniformes). Este enfoque permite una comunicación eficiente y escalable entre sistemas heterogéneos, y es ampliamente utilizado en el desarrollo de aplicaciones web y móviles.",
                'description' => "A REST API (Representational State Transfer) is an architectural style for distributed systems, based on the HTTP protocol for communication between clients and servers. REST APIs use standard HTTP methods such as GET, POST, PUT, DELETE, etc., to perform CRUD (Create, Read, Update, Delete) operations on resources, which can be represented as URIs (Uniform Resource Identifiers). This approach enables efficient and scalable communication between heterogeneous systems and is widely used in web and mobile application development."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 7,
                'name' => 'Laravel',
                'spanish_name' => 'Laravel',
                'link_image' => 'img/topics/laravel.svg',
                'spanish_description' => "Laravel es un marco de aplicación web de código abierto para el desarrollo de aplicaciones web en PHP. Sigue el patrón de arquitectura MVC y proporciona características como enrutamiento, migraciones de base de datos, autenticación de usuarios y una amplia gama de bibliotecas que hacen que el desarrollo web sea rápido y eficiente.",
                'description' => "Laravel is an open-source PHP web application framework for web application development. It follows the MVC architecture pattern and provides features like routing, database migrations, user authentication, and a wide range of libraries that make web development fast and efficient."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 7,
                'name' => 'Alpine.js',
                'spanish_name' => 'Alpine.js',
                'link_image' => 'img/topics/Alpinejs.svg',
                'spanish_description' => "Alpine.js es un marco de trabajo minimalista de JavaScript para desarrollar aplicaciones web interactivas y dinámicas. Se centra en la manipulación del DOM directamente desde HTML, lo que lo hace fácil de aprender y usar. Alpine.js es una excelente opción para agregar interactividad a sitios web sin el peso de otros marcos de trabajo más grandes.",
                'description' => "Alpine.js is a minimalist JavaScript framework for developing interactive and dynamic web applications. It focuses on manipulating the DOM directly from HTML, making it easy to learn and use. Alpine.js is an excellent choice for adding interactivity to websites without the overhead of larger frameworks."
            ],

            [
                'topic_id' => null,
                'type_topic_id' => 3,
                'name' => 'Livewire',
                'spanish_name' => 'Livewire',
                'link_image' => 'img/topics/Livewire.svg',
                'spanish_description' => "Livewire es una biblioteca de front-end de código abierto para Laravel que permite desarrollar interfaces de usuario interactivas utilizando PHP en el servidor. Utiliza técnicas de reactividad para actualizar la interfaz de usuario en tiempo real sin necesidad de escribir código JavaScript. Livewire simplifica el desarrollo de aplicaciones web al permitir a los desarrolladores centrarse en escribir PHP.",
                'description' => "Livewire is an open-source front-end library for Laravel that allows developing interactive user interfaces using PHP on the server. It uses reactivity techniques to update the UI in real-time without writing JavaScript code. Livewire simplifies web application development by allowing developers to focus on writing PHP."
            ],

            [
                'topic_id' => 29,
                'type_topic_id' => 3,
                'name' => 'DOMPDF/Laravel',
                'spanish_name' => 'DOMPDF/Laravel',
                'link_image' =>null,
                'spanish_description' => "DOMPDF es una biblioteca de PHP que permite generar documentos PDF directamente desde HTML y CSS. Es útil para generar informes, facturas, certificados y otros documentos en formato PDF directamente desde una aplicación web. DOMPDF facilita la generación de PDFs dinámicos al permitir el uso de HTML y CSS estándar.",
                'description' => "DOMPDF is a PHP library that allows generating PDF documents directly from HTML and CSS. It is useful for generating reports, invoices, certificates, and other documents in PDF format directly from a web application. DOMPDF makes generating dynamic PDFs easy by allowing the use of standard HTML and CSS."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 17,
                'name' => 'Azure',
                'spanish_name' => 'Azure',
                'link_image' => 'img/topics/azure.svg',
                'spanish_description' => "Azure es la plataforma de servicios en la nube de Microsoft que ofrece una amplia gama de servicios para desarrollar, implementar y administrar aplicaciones y servicios en la nube. Esto incluye servicios de cómputo, almacenamiento, bases de datos, inteligencia artificial, Internet de las cosas (IoT), entre otros. Azure permite a los desarrolladores crear soluciones escalables y rentables sin preocuparse por la infraestructura subyacente.",
                'description' => "Azure is Microsoft's cloud services platform that offers a wide range of services for developing, deploying, and managing cloud-based applications and services. This includes compute, storage, database, artificial intelligence, Internet of Things (IoT), and more. Azure enables developers to build scalable and cost-effective solutions without worrying about the underlying infrastructure."
            ],

            [
                'topic_id' => null,
                'type_topic_id' => 16,
                'name' => 'Scrum',
                'spanish_name' => 'Scrum',
                'link_image' => null,
                'spanish_description' => "Scrum es un marco de trabajo ágil utilizado comúnmente en el desarrollo de software para gestionar proyectos de manera iterativa e incremental. Se basa en principios de transparencia, inspección y adaptación, y se centra en la entrega continua de valor al cliente. Scrum define roles, eventos y artefactos que ayudan a los equipos a trabajar de manera colaborativa y eficiente.",
                'description' => "Scrum is an agile framework commonly used in software development to manage projects iteratively and incrementally. It is based on principles of transparency, inspection, and adaptation, and focuses on continuously delivering value to the customer. Scrum defines roles, events, and artifacts that help teams work collaboratively and efficiently."
            ],

            [
                'topic_id' => null,
                'type_topic_id' => 7,
                'name' => 'Blazor',
                'spanish_name' => 'blazor',
                'link_image' => 'img/topics/blazor.svg',
                'spanish_description' => "Blazor es un marco de trabajo de desarrollo web de código abierto creado por Microsoft que permite construir aplicaciones web interactivas utilizando C# y .NET en lugar de JavaScript. Utiliza la tecnología WebAssembly para ejecutar código .NET en el navegador, lo que permite a los desarrolladores crear aplicaciones web modernas y rápidas sin tener que escribir código JavaScript.",
                'description' => "Blazor is an open-source web development framework created by Microsoft that allows building interactive web applications using C# and .NET instead of JavaScript. It uses WebAssembly technology to run .NET code in the browser, enabling developers to create modern and fast web applications without having to write JavaScript code."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 16,
                'name' => 'SVG',
                'spanish_name' => 'SVG',
                'link_image' => 'img/topics/svg.svg',
                'spanish_description' => "SVG (Scalable Vector Graphics) es un formato de gráficos vectoriales basado en XML que se utiliza para definir gráficos basados en vectores para la web. Permite crear imágenes de alta calidad y resolución independiente de la pantalla, lo que las hace ideales para gráficos en la web y aplicaciones interactivas.",
                'description' => "SVG (Scalable Vector Graphics) is an XML-based vector graphics format used to define vector-based graphics for the web. It allows creating high-quality images that are resolution-independent, making them ideal for graphics on the web and interactive applications."
            ],
            [
                'topic_id' => null,
                'type_topic_id' => 18,
                'name' => 'dev.to',
                'spanish_name' => 'dev.to',
                'link_image' => null,
                'spanish_description' => "Dev.to es una plataforma comunitaria en línea donde los desarrolladores comparten y discuten ideas y conocimientos sobre programación, tecnología y desarrollo de software. Los usuarios pueden publicar artículos, tutoriales, opiniones y debates sobre una amplia gama de temas relacionados con la programación y la informática.",
                'description' => "Dev.to is an online community platform where developers share and discuss ideas and knowledge about programming, technology, and software development. Users can publish articles, tutorials, opinions, and discussions on a wide range of topics related to programming and computer science."
            ],

        ]);
    }
}

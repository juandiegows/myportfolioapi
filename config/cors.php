<?php

return [
    'paths' => ['*'], // Permite todas las rutas
    'allowed_methods' => ['*'], // Permite todos los métodos HTTP (GET, POST, PUT, DELETE, etc.)
    'allowed_origins' => [
        'http://localhost',         
        'http://localhost:4200', 
        'https://juandiegows.com',   
        'https://www.juandiegows.com' ,
        'https://codigolimpio.com.co' ,
        'https://www.codigolimpio.com.co' ,
    ],
    'allowed_origins_patterns' => [], // No es necesario usar patrones dinámicos
    'allowed_headers' => ['*'], // Permite todas las cabeceras
    'exposed_headers' => [], // Define si necesitas exponer encabezados específicos
    'max_age' => 0, // Tiempo de caché para las solicitudes preflight
    'supports_credentials' => false, // Cambia a true si usas autenticación basada en cookies/sesiones
];

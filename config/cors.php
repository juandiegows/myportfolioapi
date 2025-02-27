<?php

return [
    'paths' => ['*'], // Permite todas las rutas
    'allowed_methods' => ['*'], // Permite todos los métodos HTTP (GET, POST, PUT, DELETE, etc.)
    'allowed_origins' => [
        'http://localhost',          // Permite localhost sin puerto específico
        'http://localhost:4200',     // Ejemplo con puerto (React, Vue, Angular dev servers)
        'https://juandiegows.com',   // Permite dominio en producción
        'https://www.juandiegows.com' // Permite con 'www' si es necesario
    ],
    'allowed_origins_patterns' => [], // No es necesario usar patrones dinámicos
    'allowed_headers' => ['*'], // Permite todas las cabeceras
    'exposed_headers' => [], // Define si necesitas exponer encabezados específicos
    'max_age' => 0, // Tiempo de caché para las solicitudes preflight
    'supports_credentials' => false, // Cambia a true si usas autenticación basada en cookies/sesiones
];

<?php

return [
    'paths' => ['api/*'], // Define las rutas que deben aceptar CORS
    'allowed_methods' => ['*'], // Permite todos los métodos (GET, POST, PUT, DELETE, etc.)
    'allowed_origins' => ['*'], // Permite específicamente este origen
    'allowed_origins_patterns' => [], // Si necesitas usar patrones (regex)
    'allowed_headers' => ['*'], // Permite todos los encabezados
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false, // Cambia a true si necesitas enviar cookies o autenticación
];


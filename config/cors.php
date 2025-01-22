<?php

return [
    'paths' => ['*'], // Permite todas las rutas, ya que no tienes protección
    'allowed_methods' => ['*'], // Permite todos los métodos HTTP
    'allowed_origins' => ['*'], // Especifica el origen del frontend
    'allowed_origins_patterns' => [], // Vacío si no usas patrones dinámicos
    'allowed_headers' => ['*'], // Permite todas las cabeceras
    'exposed_headers' => [], // Define si necesitas exponer encabezados específicos
    'max_age' => 0, // Tiempo de caché para las solicitudes preflight
    'supports_credentials' => false, // Cambia a true si usas cookies o autenticación basada en sesiones
];

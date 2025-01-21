<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Allowed Origins
    |--------------------------------------------------------------------------
    |
    | Define a list of origins that are allowed to access your API. Use "*" to
    | allow all origins, or specify an array of specific domains.
    |
    */
    'paths' => ['api/*'], // Define las rutas que deben aceptar CORS

    'allowed_methods' => ['*'], // Permite todos los métodos (GET, POST, PUT, DELETE, etc.)

    'allowed_origins' => ['*'], // Permite todos los orígenes o especifica dominios específicos

    'allowed_origins_patterns' => [], // Define patrones (regex) para los orígenes permitidos

    'allowed_headers' => ['*'], // Permite todos los encabezados o define específicos

    'exposed_headers' => [], // Encabezados que se pueden exponer al cliente

    'max_age' => 0, // Tiempo máximo en segundos para que una solicitud preflight sea válida

    'supports_credentials' => false, // Si las solicitudes CORS deben permitir credenciales (cookies)
];


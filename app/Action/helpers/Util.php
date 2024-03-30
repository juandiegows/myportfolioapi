<?php

namespace App\Action\Helpers;

class Util {

   public static function getBrowser($client)
    {
        if (strpos($client, 'MSIE') !== false)
            return 'Internet explorer';
        elseif (strpos($client, 'Trident') !== false)
            return 'Internet explorer';
        elseif (strpos($client, 'Firefox') !== false)
            return 'Mozilla Firefox';
        elseif (strpos($client, 'Chrome') !== false)
            return 'Google Chrome';
        elseif (strpos($client, 'Opera Mini') !== false)
            return "Opera Mini";
        elseif (strpos($client, 'Opera') !== false)
            return "Opera";
        elseif (strpos($client, 'Safari') !== false)
            return "Safari";
        else
            return 'Other';
    }
}


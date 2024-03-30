<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Torann\GeoIP\Facades\GeoIP;

class IpAddressController extends Controller
{
    public function getIpAddress(Request $request)
    {

        $ipv4 =  file_get_contents('http://checkip.amazonaws.com/');
        $ipv4 = trim($ipv4);
        $ipv6 = $request->getClientIp();
        $client = $request->userAgent() ?: '';
        $https = $request->secure();

        return response()->json([
            'ipv4' => $ipv4,
            'ipv6' => $ipv6,
            'client' => $client,
            'browser' => $this->getBrowser($client),
            'useHttps' => $https
        ]);
    }

    function getBrowser($client)
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

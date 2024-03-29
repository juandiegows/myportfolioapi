<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Torann\GeoIP\Facades\GeoIP;

class IpAddressController extends Controller
{
    public function getIpAddress(Request $request)
    {
        $ipv4 = $request->ip();
        $ipv6 = $request->getClientIp();
        $client = $request->userAgent() ?: '';
        $https = $request->secure();
        $location = GeoIP::getLocation($ipv6);
        $ipv4 = inet_ntop(substr(@inet_pton($ipv6), 12));

        return response()->json([
            'ipv4' => $ipv4,
            'ipv6' => $ipv6,
            'location' =>  $location,
            'client' => $client,
            'useHttps' => $https
        ]);
    }
}

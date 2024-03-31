<?php

namespace App\Http\Controllers;

use App\Action\helpers\Util;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Torann\GeoIP\Facades\GeoIP;

class IpAddressController extends Controller
{
    public function getIpAddress(Request $request)
    {


        $ipv4 = $request->ip();
        $ipv6 = $request->getClientIp();
        $client = $request->userAgent() ?: '';
        $https = $request->secure();
        $os = Util::getOperatingSystem($client);
        return response()->json([
            'ipv4' => $ipv4,
            'ipv6' => $ipv6,
            'client' => $client,
            'browser' => Util::getBrowser($client),
            'system' => $os,
            'useHttps' => $https,
            'now' => now()
        ]);
    }

}

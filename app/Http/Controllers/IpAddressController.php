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
        $response = Http::get('https://api.ipify.org/?format=json');

        if ($response->successful()) {
            $data = $response->json();
            $ipv4 = $data['ip'];
        } else {
            $ipv4 = $request->ip();
        }

        $ipv6 = $request->getClientIp();
        $client = $request->userAgent() ?: '';
        $https = $request->secure();

        return response()->json([
            'ipv4' => $ipv4,
            'ipv6' => $ipv6,
            'client' => $client,
            'useHttps' => $https
        ]);
    }
}

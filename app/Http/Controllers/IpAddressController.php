<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IpAddressController extends Controller
{
    public function getIpAddress(Request $request)
    {
        $ipv4 = $request->ip();
        $ipv6 = $request->getClientIp();
        $client = $request->userAgent() ?: '';
        $https = $request->secure();

        $binary = @inet_pton($ipv6);

        if ($binary) {
            $ipv4 = @inet_ntop(substr($binary, 12));
        }
        return response()->json([
            'ipv4' => $ipv4,
            'ipv6' => $ipv6,
            'client' => $client,
            'useHttps' => $https
        ]);
    }
}

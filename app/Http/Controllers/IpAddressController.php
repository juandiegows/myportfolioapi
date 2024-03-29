<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IpAddressController extends Controller
{
    public function getIpAddress(Request $request)
    {
        $ipv4 = $request->ips();
        $ipv6 = $request->getClientIps();
        $client = $request->userAgent() ?:'';
        $https = $request->secure();
        return response()->json([
            'ipv4' => $ipv4,
            'ipv6' => $ipv6,
            'client' => $client,
            'useHttps' => $https
        ]);
    }
}

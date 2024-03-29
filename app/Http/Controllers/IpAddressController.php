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
        $ipv62 = $request->header('X-Real-IP');
        if (!$ipv62) {
            $ipv62 = $request->header('X-Forwarded-For');
        }
        if (!$ipv62) {
            $ipv62 = $request->header('Forwarded');
        }
        $client = $request->userAgent() ?: '';
        $https = $request->secure();
        return response()->json([
            'ipv4' => $ipv4,
            'ipv6' => $ipv6,
            'ipv62' => $ipv62,
            'client' => $client,
            'useHttps' => $https
        ]);
    }
}

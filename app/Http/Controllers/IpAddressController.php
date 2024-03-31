<?php

namespace App\Http\Controllers;

use App\Action\helpers\Util;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Torann\GeoIP\Facades\GeoIP;



class IpAddressController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/ip-address",
     *     summary="Obtiene la información de la dirección IP del cliente",
     *     tags={"IP Address"},
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="ipv4",
     *                 type="string",
     *                 description="Dirección IPv4 del cliente"
     *             ),
     *             @OA\Property(
     *                 property="ipv6",
     *                 type="string",
     *                 description="Dirección IPv6 del cliente"
     *             ),
     *             @OA\Property(
     *                 property="client",
     *                 type="string",
     *                 description="Información del cliente, como el agente de usuario"
     *             ),
     *             @OA\Property(
     *                 property="browser",
     *                 type="string",
     *                 description="Navegador utilizado por el cliente"
     *             ),
     *             @OA\Property(
     *                 property="system",
     *                 type="string",
     *                 description="Sistema operativo del cliente"
     *             ),
     *             @OA\Property(
     *                 property="useHttps",
     *                 type="boolean",
     *                 description="Indica si la solicitud se realizó a través de HTTPS"
     *             ),
     *             @OA\Property(
     *                 property="now",
     *                 type="string",
     *                 description="Fecha y hora actuales"
     *             )
     *         )
     *     )
     * )
     */

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

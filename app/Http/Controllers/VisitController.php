<?php

namespace App\Http\Controllers;

use App\Action\helpers\Util;
use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/visit",
     *     summary="Obtiene información sobre la visita actual",
     *     tags={"Visits"},
     *     @OA\Response(
     *         response=200,
     *         description="Información sobre la visita actual",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="visit",
     *                 ref="#/components/schemas/Visit"
     *             ),
     *             @OA\Property(
     *                 property="count",
     *                 type="integer",
     *                 description="Número de visitas distintas del día actual"
     *             ),
     *             @OA\Property(
     *                 property="total",
     *                 type="integer",
     *                 description="Número total de visitas registradas"
     *             )
     *         )
     *     )
     * )
     */
    public function index()
    {
        $ipv4 = request()->ip();
        $client = request()->userAgent() ?: '';
        $browser = Util::getBrowser($client);
        $https = request()->secure();
        $os = Util::getOperatingSystem($client);

        $now = now();

        $visit = Visit::where('ip', $ipv4)
            ->whereDate('date', today())
            ->where('ip', $ipv4)
            ->where('browser', $browser)
            ->first();

        if (!$visit) {
            $visit = new Visit();
            $visit->ip = $ipv4;
            $visit->browser = $browser;
            $visit->useHttps = $https;
            $visit->client = $client;
            $visit->date = today();
            $visit->system = $os;
            $visit->save();
        } else {
            if ($now->diffInMinutes($visit->updated_at) >= 30) {
                $visit->count += 1;
            }
        }
        $visit->save();
        $distinctVisitsCount = Visit::distinct('ip', 'date')
            ->count();

        return response()->json([
            'visit' => $visit,
            'count' => $distinctVisitsCount,
            'total' => count(Visit::all())
        ]);
    }

    /**
     * @OA\Get(
     *     path="/api/visit/all",
     *     summary="Obtiene todas las visitas registradas",
     *     tags={"Visits"},
     *     @OA\Response(
     *         response=200,
     *         description="Lista de todas las visitas registradas",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Visit")
     *         )
     *     )
     * )
     */
    public function all()
    {
        $visits = Visit::orderBy('updated_at', 'desc')->get();
        return response()->json($visits);
    }
}

<?php

namespace App\Http\Controllers;

use App\Action\Helpers\Util;
use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function index()
    {
        $ipv4 = request()->ip();
        $client = request()->userAgent() ?: '';
        $browser =Util::getBrowser($client);
        $https = request()->secure();
        $visit = Visit::where('ip', $ipv4)
            ->whereDate('date', today())
            ->where('client', $client)
            ->first();

        if (!$visit) {
            $visit = new Visit();
            $visit->ip = $ipv4;
            $visit->browser = $browser;
            $visit->useHttps = $https;
            $visit->client = $client;
            $visit->date = today();
            $visit->save();
        }

        $distinctVisitsCount = Visit::distinct('ip','date')
            ->count();

        return response()->json([
            'visit' => $visit,
            'count' => $distinctVisitsCount,
            'total' => count(Visit::all())
        ]);
    }
}

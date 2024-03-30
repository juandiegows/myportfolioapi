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
        $https = request()->secure();
        $visit = Visit::where('ip', $ipv4)
            ->whereDate('date', today())
            ->first();

        if (!$visit) {
            $visit = new Visit();
            $visit->ip = $ipv4;
            $visit->browser = Util::getBrowser($client);
            $visit->useHttps = $https;
            $visit->client = $client;
            $visit->date = today();
            $visit->save();
        }

        $distinctVisitsCount = Visit::distinct('ip','date')
            ->count();

        return response()->json([
            'visit' => $visit,
            'count' => $distinctVisitsCount
        ]);
    }
}

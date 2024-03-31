<?php

namespace App\Http\Controllers;

use App\Action\helpers\Util;
use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
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
                $visit->save();
            }
        }

        $distinctVisitsCount = Visit::distinct('ip', 'date')
            ->count();

        return response()->json([
            'visit' => $visit,
            'count' => $distinctVisitsCount,
            'total' => count(Visit::all()->orderDesc('updated_at'))
        ]);
    }

    public function all()
    {
        return response()->json(Visit::all());
    }
}

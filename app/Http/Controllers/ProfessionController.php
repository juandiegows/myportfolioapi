<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProfessionResource;
use App\Models\Meta;
use App\Models\Profession;
use App\Models\Response;
use Exception;
use Illuminate\Http\Request;

class ProfessionController extends Controller
{
    public function index()
    {
        try {

            return response()->json(
                new Response(Profession::all(), new Meta(200, "Ok"))

            );
        } catch (\Throwable $th) {

            return response()->json(new Response(null, new Meta(400, $th->getMessage(), $th->getMessage())));
        }
    }
}

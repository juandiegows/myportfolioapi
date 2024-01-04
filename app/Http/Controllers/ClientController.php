<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClientResource;
use App\Models\Client;
use App\Models\Meta;
use App\Models\Response;

class ClientController extends Controller
{
    public function index()
    {
        try {

            return response()->json(
                new Response(ClientResource::collection(Client::all()), new Meta(200, "Ok"))

            );
        } catch (\Throwable $th) {

            return response()->json(new Response(null, new Meta(400, $th->getMessage(), $th->getMessage())));
        }
    }
}

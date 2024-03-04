<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string',
                'subject' => 'required|string',
                'email' => 'required|email',
                'message' => 'required|string',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'meta' => [
                        'href' => $request->url(),
                        "code" => 400
                    ],
                    'errors' => $validator->errors(),

                ], 400);
            }


            $message =  Message::create($request->all());
            return response()->json([
                'meta' => [
                    'href' => $request->url(),
                    "code" => 201
                ],

                'data' => $message
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'meta' => [
                    'href' => $request->url(),
                    "code" => 400
                ],

                'data' =>  $th->getMessage()
            ], 400);
        }
    }
}

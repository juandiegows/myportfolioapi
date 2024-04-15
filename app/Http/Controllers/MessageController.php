<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmMessageCreated;
use App\Mail\MessageCreated;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Config;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    /**
     * @OA\Post(
     *     path="/api/messages",
     *     summary="Almacena un nuevo mensaje",
     *     tags={"Messages"},
     *     @OA\RequestBody(
     *         required=true,
     *         description="Datos del mensaje a almacenar",
     *         @OA\JsonContent(
     *             required={"name", "subject", "email", "message"},
     *             @OA\Property(property="name", type="string"),
     *             @OA\Property(property="subject", type="string"),
     *             @OA\Property(property="email", type="string", format="email"),
     *             @OA\Property(property="message", type="string")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Mensaje almacenado exitosamente",
     *         @OA\JsonContent(
     *             @OA\Property(property="meta", ref="#/components/schemas/Meta"),
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 ref="#/components/schemas/Message"
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Error de validación",
     *         @OA\JsonContent(
     *             @OA\Property(property="meta", ref="#/components/schemas/Meta"),
     *             @OA\Property(
     *                 property="errors",
     *                 type="object",
     *                 description="Objeto conteniendo errores de validación"
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Error al procesar la solicitud",
     *         @OA\JsonContent(
     *             @OA\Property(property="meta", ref="#/components/schemas/Meta"),
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 @OA\Property(property="message", type="string", description="Mensaje de error"),
     *                 @OA\Property(property="date", type="string", format="date-time", description="Fecha y hora del error")
     *             )
     *         )
     *     )
     * )
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

            $message = Message::create($request->all());
            Mail::to(Config::get('app.MAIL'))
                ->send(new MessageCreated($message));

                Mail::to($message->email)
                ->cc(Config::get('app.MAIL'))
                ->send(new ConfirmMessageCreated($message,Config::get('app.MAIL')));

            return response()->json([
                'meta' => [
                    'href' => $request->url(),
                    "code" => 200
                ],

                'data' => $message
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'meta' => [
                    'href' => $request->url(),
                    "code" => 500
                ],

                'data' => [
                    "message" => $th->getMessage(),
                    'date' => now()
                ]

            ], 500);
        }
    }
}

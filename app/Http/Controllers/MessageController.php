<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmMessageCreated;
use App\Mail\MessageCreated;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Config;

class MessageController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/message",
     *     summary="Almacena un nuevo mensaje",
     *     tags={"Messages"},
     *     @OA\RequestBody(
     *         required=true,
     *         description="Datos del mensaje a almacenar",
     *         @OA\JsonContent(
     *             required={"name", "subject", "email", "message", "captcha_token"},
     *             @OA\Property(property="name", type="string"),
     *             @OA\Property(property="subject", type="string"),
     *             @OA\Property(property="email", type="string", format="email"),
     *             @OA\Property(property="message", type="string"),
     *             @OA\Property(property="captcha_token", type="string")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Mensaje almacenado exitosamente",
     *         @OA\JsonContent(
     *             @OA\Property(property="meta", ref="#/components/schemas/Meta"),
     *             @OA\Property(property="data", ref="#/components/schemas/Message")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Error de validación",
     *         @OA\JsonContent(
     *             @OA\Property(property="meta", ref="#/components/schemas/Meta"),
     *             @OA\Property(property="errors", type="object")
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Error al procesar la solicitud",
     *         @OA\JsonContent(
     *             @OA\Property(property="meta", ref="#/components/schemas/Meta"),
     *             @OA\Property(property="data", type="object",
     *                 @OA\Property(property="message", type="string"),
     *                 @OA\Property(property="date", type="string", format="date-time")
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
                'captcha_token' => 'required|string'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'meta' => ['href' => $request->url(), 'code' => 400],
                    'errors' => $validator->errors(),
                ], 400);
            }

            $captchaResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' =>env('RECAPTCHA_SECRET_KEY'),
                'response' => $request->input('captcha_token'),
                'remoteip' => $request->ip()
            ]);

            $captchaData = $captchaResponse->json();

            if (!$captchaData['success'] || $captchaData['score'] < 0.5) {
                return response()->json([
                    'meta' => ['href' => $request->url(), 'code' => 400],
                    'errors' => ['captcha' => ['La validación de reCAPTCHA ha fallado.']],
                ], 400);
            }

            $message = Message::create($request->all());
            Mail::to(Config::get('app.MAIL'))->send(new MessageCreated($message));
            Mail::to($message->email)
                ->cc(Config::get('app.MAIL'))
                ->send(new ConfirmMessageCreated($message, Config::get('app.MAIL')));

            return response()->json([
                'meta' => ['href' => $request->url(), 'code' => 200],
                'data' => $message
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'meta' => ['href' => $request->url(), 'code' => 500],
                'data' => ['message' => $th->getMessage(), 'date' => now()]
            ], 500);
        }
    }
}

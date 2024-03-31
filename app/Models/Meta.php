<?php

namespace App\Models;

/**
 * @OA\Schema(
 *     title="Meta",
 *     description="Metadatos de la respuesta JSON.",
 *     @OA\Property(
 *         property="code",
 *         type="integer",
 *         format="int32",
 *         description="Código de estado de la respuesta."
 *     ),
 *     @OA\Property(
 *         property="message",
 *         type="string",
 *         description="Mensaje de la respuesta en inglés."
 *     ),
 *     @OA\Property(
 *         property="messageSpanish",
 *         type="string",
 *         description="Mensaje de la respuesta en español."
 *     )
 * )
 */
class Meta
{



    public function __construct($code = 200, $message = "Ok", $messageSpanish = "Ok")
    {
        $this->code = $code;
        $this->message = $message;
        $this->messageSpanish = $messageSpanish;
    }
    public  $code = 200;
    public  $message = "Ok";
    public  $messageSpanish = "Ok";
}

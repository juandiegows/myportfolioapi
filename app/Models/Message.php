<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @OA\Schema(
 *     schema="Message",
 *     title="Message",
 *     description="Modelo para almacenar un mensaje",
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         description="Nombre del remitente"
 *     ),
 *     @OA\Property(
 *         property="subject",
 *         type="string",
 *         description="Asunto del mensaje"
 *     ),
 *     @OA\Property(
 *         property="email",
 *         type="string",
 *         format="email",
 *         description="Correo electrónico del remitente"
 *     ),
 *     @OA\Property(
 *         property="message",
 *         type="string",
 *         description="Contenido del mensaje"
 *     )
 * )
 */
class Message extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'subject', 'email', 'message'];
}

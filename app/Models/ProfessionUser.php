<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="ProfessionUser",
 *     title="Profession",
 *     description="Modelo de profesión",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID de la profesión"
 *     ),
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         description="Nombre de la profesión en inglés"
 *     ),
 *     @OA\Property(
 *         property="name_spanish",
 *         type="string",
 *         description="Nombre de la profesión en español"
 *     ),
 *     @OA\Property(
 *         property="pivot",
 *         type="object",
 *         description="Información adicional de la relación entre usuario y profesión",
 *         @OA\Property(
 *             property="user_id",
 *             type="integer",
 *             description="ID del usuario relacionado"
 *         ),
 *         @OA\Property(
 *             property="profession_id",
 *             type="integer",
 *             description="ID de la profesión relacionada"
 *         )
 *     )
 * )
 */

class ProfessionUser extends Model
{
    use HasFactory;
}

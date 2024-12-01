<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="Service",
 *     title="Service",
 *     description="Modelo de servicio",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID del servicio"
 *     ),
 *     @OA\Property(
 *         property="user_id",
 *         type="integer",
 *         description="ID del usuario asociado al servicio"
 *     ),
 *     @OA\Property(
 *         property="title",
 *         type="string",
 *         maxLength=250,
 *         description="Título del servicio en inglés"
 *     ),
 *     @OA\Property(
 *         property="spanish_title",
 *         type="string",
 *         maxLength=250,
 *         description="Título del servicio en español"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         description="Descripción del servicio en inglés"
 *     ),
 *     @OA\Property(
 *         property="spanish_description",
 *         type="string",
 *         description="Descripción del servicio en español"
 *     ),
 *     @OA\Property(
 *         property="active",
 *         type="boolean",
 *         description="Indica si el servicio está activo"
 *     )
 * )
 */

class Service extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $casts = ["active" => "boolean"];
}

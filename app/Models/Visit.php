<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="Visit",
 *     title="Visit",
 *     description="Información sobre la visita",
 *     @OA\Property(
 *         property="ip",
 *         type="string",
 *         description="Dirección IP del visitante"
 *     ),
 *     @OA\Property(
 *         property="browser",
 *         type="string",
 *         description="Navegador utilizado"
 *     ),
 *     @OA\Property(
 *         property="useHttps",
 *         type="boolean",
 *         description="Indica si se utiliza HTTPS"
 *     ),
 *     @OA\Property(
 *         property="client",
 *         type="string",
 *         description="Información del cliente"
 *     ),
 *     @OA\Property(
 *         property="date",
 *         type="string",
 *         format="date",
 *         description="Fecha de la visita"
 *     ),
 *     @OA\Property(
 *         property="system",
 *         type="string",
 *         description="Sistema operativo utilizado"
 *     ),
 *     @OA\Property(
 *         property="count",
 *         type="integer",
 *         description="Número de visitas del mismo día"
 *     )
 * )
 */
class Visit extends Model
{
    use HasFactory;
}

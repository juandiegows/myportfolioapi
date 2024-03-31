<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="SocialMedia",
 *     title="SocialMedia",
 *     description="Modelo de red social",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID de la red social"
 *     ),
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         maxLength=100,
 *         description="Nombre de la red social"
 *     ),
 *     @OA\Property(
 *         property="link_image",
 *         type="string",
 *         maxLength=200,
 *         nullable=true,
 *         description="Enlace a la imagen de la red social"
 *     ),
 *     @OA\Property(
 *         property="url",
 *         type="string",
 *         maxLength=200,
 *         nullable=true,
 *         description="Enlace a la imagen de la red social completa"
 *     )
 * )
 */
class SocialMedia extends Model
{
    use HasFactory;

    protected $fillable = ["url"];
    protected $appends = ["url"];
    public function getUrlAttribute()
    {
        return url($this->link_image);
    }
}

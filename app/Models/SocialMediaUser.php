<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="SocialMediaEntry",
 *     title="SocialMediaEntry",
 *     description="Entrada de red social",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID de la entrada de red social"
 *     ),
 *     @OA\Property(
 *         property="user_id",
 *         type="integer",
 *         description="ID del usuario asociado a la entrada"
 *     ),
 *     @OA\Property(
 *         property="social_media_id",
 *         type="integer",
 *         description="ID de la red social asociada a la entrada"
 *     ),
 *     @OA\Property(
 *         property="link",
 *         type="string",
 *         description="Enlace de la red social"
 *     ),
 *     @OA\Property(
 *         property="is_principal",
 *         type="boolean",
 *         description="Indica si la red social es la principal del usuario"
 *     ),
 *     @OA\Property(
 *         property="social_media",
 *         ref="#/components/schemas/SocialMedia"
 *     )
 * )
 */
class SocialMediaUser extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'user_id', 
        'social_media_id', 
        'link', 
        'is_principal'
    ];
    public function social_media()
    {
        return $this->belongsTo(SocialMedia::class);
    }

    protected $appends = ['social_media'];
    public function getSocialMediaAttribute()
    {
        return $this->social_media()->get()->first();
    }
    protected $casts = [
        "is_principal" => "boolean"
    ];
}

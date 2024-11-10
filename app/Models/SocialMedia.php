<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

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
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'link_image', 'url'];
    protected $appends = ["url"];
    public function getUrlAttribute()
    {
        // Primero, verificar si el archivo existe en la ruta especificada (public)
        if (file_exists(public_path($this->link_image))) {
            return url($this->link_image);
        }
    
        // Si no existe en public, verificar si está en el storage
        $storagePath = 'storage/' . $this->link_image;
        if (Storage::disk('public')->exists($this->link_image)) {
            return url($storagePath);
        }
    
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
{
    /**
     * @OA\Schema(
     *     schema="ImageResource",
     *     title="ImageResource",
     *     description="Modelo de recurso de imagen",
     *     @OA\Property(
     *         property="id",
     *         type="integer",
     *         description="ID de la imagen"
     *     ),
     *     @OA\Property(
     *         property="name",
     *         type="string",
     *         description="Nombre de la imagen"
     *     ),
     *     @OA\Property(
     *         property="name_spanish",
     *         type="string",
     *         description="Nombre de la imagen en español"
     *     ),
     *     @OA\Property(
     *         property="link",
     *         type="string",
     *         format="url",
     *         description="Enlace completo de la imagen"
     *     ),
     *     @OA\Property(
     *         property="link_900",
     *         type="string",
     *         format="url",
     *         description="Enlace de la imagen con ancho de 900px"
     *     ),
     *     @OA\Property(
     *         property="link_700",
     *         type="string",
     *         format="url",
     *         description="Enlace de la imagen con ancho de 700px"
     *     ),
     *     @OA\Property(
     *         property="link_300",
     *         type="string",
     *         format="url",
     *         description="Enlace de la imagen con ancho de 300px"
     *     )
     * )
     */

    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            'name' => $this->name,
            'name_spanish' => $this->name_spanish,
            'link' => url($this->link),
            'link_900' => url($this->link_900),
            'link_700' => url($this->link_700),
            'link_300' => url($this->link_300),
        ];
    }
}

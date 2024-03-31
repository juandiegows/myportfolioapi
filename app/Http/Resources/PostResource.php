<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * @OA\Schema(
     *     schema="PostResource",
     *     title="PostResource",
     *     description="Modelo de publicación",
     *     @OA\Property(
     *         property="id",
     *         type="integer",
     *         description="ID de la publicación"
     *     ),
     *     @OA\Property(
     *         property="title",
     *         type="string",
     *         description="Título de la publicación en inglés"
     *     ),
     *     @OA\Property(
     *         property="spanish_title",
     *         type="string",
     *         description="Título de la publicación en español"
     *     ),
     *     @OA\Property(
     *         property="topics",
     *         type="array",
     *         @OA\Items(type="string"),
     *         description="Temas de la publicación en inglés"
     *     ),
     *     @OA\Property(
     *         property="topics_spanish",
     *         type="array",
     *         @OA\Items(type="string"),
     *         description="Temas de la publicación en español"
     *     ),
     *     @OA\Property(
     *         property="url_image",
     *         type="string",
     *         format="url",
     *         description="URL de la imagen asociada a la publicación"
     *     ),
     *     @OA\Property(
     *         property="link",
     *         type="string",
     *         description="Enlace asociado a la publicación"
     *     ),
     *     @OA\Property(
     *         property="date",
     *         type="string",
     *         format="date",
     *         description="Fecha de la publicación"
     *     ),
     *     @OA\Property(
     *         property="created_at",
     *         type="string",
     *         format="date-time",
     *         description="Fecha de creación de la publicación"
     *     ),
     *     @OA\Property(
     *         property="updated_at",
     *         type="string",
     *         format="date-time",
     *         description="Fecha de actualización de la publicación"
     *     )
     * )
     */

    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "title" => $this->title,
            "spanish_title" => $this->spanish_title,
            'topics' => $this->topics()->pluck('name')->toArray(),
            'topics_spanish' => $this->topics()->pluck('spanish_name')->toArray(),
            "url_image" => url($this->url_image),
            "link" => $this->link,
            "date" => $this->date,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}

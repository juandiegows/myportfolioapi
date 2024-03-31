<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TypeTopicResource extends JsonResource
{
    /**
     * @OA\Schema(
     *     schema="TypeTopicResource",
     *     title="TypeTopicResource",
     *     description="Recurso para un tipo de tema",
     *     @OA\Property(
     *         property="id",
     *         type="integer",
     *         description="ID del tipo de tema"
     *     ),
     *     @OA\Property(
     *         property="name",
     *         type="string",
     *         description="Nombre del tipo de tema"
     *     ),
     *     @OA\Property(
     *         property="spanish_name",
     *         type="string",
     *         description="Nombre del tipo de tema en español"
     *     )
     * )
     */

    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "spanish_name" => $this->spanish_name
        ];
    }
}

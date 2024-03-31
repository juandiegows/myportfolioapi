<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TopicResource extends JsonResource
{
    /**
     * @OA\Schema(
     *     schema="TopicResource",
     *     title="TopicResource",
     *     description="Recurso para un tema",
     *     @OA\Property(
     *         property="id",
     *         type="integer",
     *         description="ID del tema"
     *     ),
     *     @OA\Property(
     *         property="name",
     *         type="string",
     *         description="Nombre del tema"
     *     ),
     *     @OA\Property(
     *         property="spanish_name",
     *         type="string",
     *         description="Nombre del tema en español"
     *     ),
     *     @OA\Property(
     *         property="link_image",
     *         type="string",
     *         format="url",
     *         description="Enlace a la imagen del tema"
     *     ),
     *     @OA\Property(
     *         property="description",
     *         type="string",
     *         description="Descripción del tema"
     *     ),
     *     @OA\Property(
     *         property="spanish_description",
     *         type="string",
     *         description="Descripción del tema en español"
     *     ),
     *     @OA\Property(
     *         property="topic_master",
     *         ref="#/components/schemas/TopicResource",
     *         description="Tema principal"
     *     ),
     *     @OA\Property(
     *         property="type_topic",
     *         ref="#/components/schemas/TypeTopicResource",
     *         description="Tipo de tema"
     *     )
     * )
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "spanish_name" => $this->spanish_name,
            "link_image" => url($this->link_image),
            "description" => $this->description,
            "spanish_description" => $this->spanish_description,
            "topic_master" => new TopicResource($this->topic),
            "type_topic" => new TypeTopicResource($this->typeTopic->first()),
        ];
    }
}

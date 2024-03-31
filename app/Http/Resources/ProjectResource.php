<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * @OA\Schema(
     *     schema="ProjectResource",
     *     title="ProjectResource",
     *     description="Modelo de recurso de proyecto",
     *     @OA\Property(
     *         property="id",
     *         type="integer",
     *         description="ID del proyecto"
     *     ),
     *     @OA\Property(
     *         property="client_id",
     *         type="integer",
     *         description="ID del cliente asociado al proyecto"
     *     ),
     *     @OA\Property(
     *         property="principal_project_id",
     *         type="integer",
     *         description="ID del proyecto principal"
     *     ),
     *     @OA\Property(
     *         property="front_page",
     *         ref="#/components/schemas/ImageResource",
     *         description="Página frontal del proyecto"
     *     ),
     *     @OA\Property(
     *         property="title",
     *         type="string",
     *         description="Título del proyecto"
     *     ),
     *     @OA\Property(
     *         property="spanish_title",
     *         type="string",
     *         description="Título del proyecto en español"
     *     ),
     *     @OA\Property(
     *         property="short_description",
     *         type="string",
     *         description="Breve descripción del proyecto"
     *     ),
     *     @OA\Property(
     *         property="spanish_short_description",
     *         type="string",
     *         description="Breve descripción del proyecto en español"
     *     ),
     *     @OA\Property(
     *         property="description",
     *         type="string",
     *         description="Descripción detallada del proyecto"
     *     ),
     *     @OA\Property(
     *         property="spanish_description",
     *         type="string",
     *         description="Descripción detallada del proyecto en español"
     *     ),
     *     @OA\Property(
     *         property="view_link",
     *         type="string",
     *         description="Enlace de visualización del proyecto"
     *     ),
     *     @OA\Property(
     *         property="download_link",
     *         type="string",
     *         description="Enlace de descarga del proyecto"
     *     ),
     *     @OA\Property(
     *         property="video_link",
     *         type="string",
     *         description="Enlace del video del proyecto"
     *     ),
     *     @OA\Property(
     *         property="date",
     *         type="string",
     *         format="date",
     *         description="Fecha del proyecto"
     *     ),
     *     @OA\Property(
     *         property="created_at",
     *         type="string",
     *         format="date-time",
     *         description="Fecha de creación del proyecto"
     *     ),
     *     @OA\Property(
     *         property="updated_at",
     *         type="string",
     *         format="date-time",
     *         description="Fecha de actualización del proyecto"
     *     )
     * )
     */

    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "client_id" => $this->client_id,
            "principal_project_id" => $this->principal_project_id,
            "front_page" => new ImageResource($this->frontPage),
            "title" => $this->title,
            "spanish_title" => $this->spanish_title,
            "short_description" => $this->short_description,
            "spanish_short_description" => $this->spanish_short_description,
            "description" => $this->description,
            "spanish_description" => $this->spanish_description,
            "view_link" => $this->view_link,
            "download_link" => $this->download_link,
            "video_link" => $this->video_link,
            "date" => $this->date,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
    }
}

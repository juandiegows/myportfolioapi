<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EducationResource extends JsonResource
{
    /**
     * @OA\Schema(
     *     schema="EducationResource",
     *     title="EducationResource",
     *     description="Modelo de recurso de educación",
     *     @OA\Property(
     *         property="id",
     *         type="integer",
     *         description="ID de la educación"
     *     ),
     *     @OA\Property(
     *         property="entity",
     *         type="string",
     *         description="Entidad educativa"
     *     ),
     *     @OA\Property(
     *         property="title",
     *         type="string",
     *         description="Título de la educación"
     *     ),
     *     @OA\Property(
     *         property="spanish_title",
     *         type="string",
     *         description="Título de la educación en español"
     *     ),
     *     @OA\Property(
     *         property="title_education",
     *         type="string",
     *         description="Título de la educación"
     *     ),
     *     @OA\Property(
     *         property="spanish_title_education",
     *         type="string",
     *         description="Título de la educación en español"
     *     ),
     *     @OA\Property(
     *         property="description",
     *         type="string",
     *         description="Descripción de la educación"
     *     ),
     *     @OA\Property(
     *         property="spanish_description",
     *         type="string",
     *         description="Descripción de la educación en español"
     *     ),
     *     @OA\Property(
     *         property="certificate_url",
     *         type="string",
     *         format="url",
     *         nullable=true,
     *         description="URL del certificado de la educación"
     *     ),
     *     @OA\Property(
     *         property="start_date",
     *         type="string",
     *         format="date",
     *         description="Fecha de inicio de la educación"
     *     ),
     *     @OA\Property(
     *         property="end_date",
     *         type="string",
     *         format="date",
     *         description="Fecha de finalización de la educación"
     *     )
     * )
     */

    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "entity" => $this->business,
            'title' => $this->title,
            'spanish_title' => $this->spanish_title,
            'title_education' => $this->title_education,
            'spanish_title_education' => $this->spanish_title_education,
            "description" => $this->description,
            "spanish_description" => $this->spanish_description,
            "certificate_url" => $this->certificate_url == null ? null : url($this->certificate_url),
            "start_date" => $this->start_date,
            "end_date" => $this->end_date
        ];
    }
}

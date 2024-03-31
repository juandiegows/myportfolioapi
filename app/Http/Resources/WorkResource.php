<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WorkResource extends JsonResource
{
    /**
     * @OA\Schema(
     *     schema="WorkResource",
     *     title="WorkResource",
     *     description="Modelo de recurso para experiencia laboral",
     *     @OA\Property(
     *         property="id",
     *         type="integer",
     *         description="ID de la experiencia laboral"
     *     ),
     *     @OA\Property(
     *         property="logo",
     *         type="string",
     *         nullable=true,
     *         description="URL del logo de la empresa"
     *     ),
     *     @OA\Property(
     *         property="business",
     *         type="string",
     *         description="Nombre del negocio o empresa"
     *     ),
     *     @OA\Property(
     *         property="profession",
     *         ref="#/components/schemas/ProfessionResource",
     *         description="Profesión asociada a la experiencia laboral"
     *     ),
     *     @OA\Property(
     *         property="description",
     *         type="string",
     *         description="Descripción de la experiencia laboral"
     *     ),
     *     @OA\Property(
     *         property="spanish_description",
     *         type="string",
     *         description="Descripción en español de la experiencia laboral"
     *     ),
     *     @OA\Property(
     *         property="certificate_url",
     *         type="string",
     *         nullable=true,
     *         description="URL del certificado de la experiencia laboral"
     *     ),
     *     @OA\Property(
     *         property="topics",
     *         type="array",
     *         @OA\Items(type="string"),
     *         description="Temas relacionados a la experiencia laboral"
     *     ),
     *     @OA\Property(
     *         property="topics_spanish",
     *         type="array",
     *         @OA\Items(type="string"),
     *         description="Temas relacionados a la experiencia laboral en español"
     *     ),
     *     @OA\Property(
     *         property="start_date",
     *         type="string",
     *         format="date",
     *         description="Fecha de inicio de la experiencia laboral"
     *     ),
     *     @OA\Property(
     *         property="end_date",
     *         type="string",
     *         format="date",
     *         nullable=true,
     *         description="Fecha de finalización de la experiencia laboral"
     *     )
     * )
     */

    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "logo" => $this->logo == null ? null : url($this->logo),
            "business" => $this->business,
            'profession' => new ProfessionResource($this->profession),
            "description" => $this->description,
            "spanish_description" => $this->spanish_description,
            "certificate_url" => $this->certificate_url == null ? null : url($this->certificate_url),
            'topics' => $this->topics()->pluck('name')->toArray(),
            'topics_spanish' => $this->topics()->pluck('spanish_name')->toArray(),
            "start_date" => $this->start_date,
            "end_date" => $this->end_date
        ];
    }
}

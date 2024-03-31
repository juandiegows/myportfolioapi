<?php

namespace App\Http\Resources;

use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
   /**
 * @OA\Schema(
 *     schema="ClientInfo",
 *     title="Client DTO",
 *     description="Array de datos de servicio",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID del servicio"
 *     ),
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         description="Nombre del servicio"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         type="string",
 *         description="Descripción del servicio en inglés"
 *     ),
 *     @OA\Property(
 *         property="spanish_description",
 *         type="string",
 *         description="Descripción del servicio en español"
 *     ),
 *     @OA\Property(
 *         property="url_logo",
 *         type="string",
 *         description="URL del logotipo del servicio"
 *     ),
 *     @OA\Property(
 *         property="link_site",
 *         type="string",
 *         description="Enlace al sitio web del servicio"
 *     ),
 *     @OA\Property(
 *         property="year",
 *         type="integer",
 *         description="Año del servicio"
 *     ),
 *     @OA\Property(
 *         property="topics",
 *         type="array",
 *         @OA\Items(type="string"),
 *         description="Temas del servicio en inglés"
 *     ),
 *     @OA\Property(
 *         property="topics_spanish",
 *         type="array",
 *         @OA\Items(type="string"),
 *         description="Temas del servicio en español"
 *     ),
 *     @OA\Property(
 *         property="count_participants",
 *         type="integer",
 *         description="Cantidad de participantes del servicio"
 *     )
 * )
 */

    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description,
            "spanish_description" => $this->spanish_description,
            "url_logo" => url($this->url_logo),
            "link_site" => $this->link_site,
            "year" => $this->year,
            'topics' => $this->topicsAll()->pluck('name')->toArray(),
            'topics_spanish' => $this->topicsAll()->pluck('spanish_name')->toArray(),
            'count_participants' => count($this->participants)
        ];
    }
}

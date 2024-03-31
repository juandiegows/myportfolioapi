<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfessionResource extends JsonResource
{
 /**
 * @OA\Schema(
 *     schema="ProfessionResource",
 *     title="ProfessionResource",
 *     description="Modelo de profesión",
 *     @OA\Property(
 *         property="id",
 *         type="integer",
 *         description="ID de la profesión"
 *     ),
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         description="Nombre de la profesión en inglés"
 *     ),
 *     @OA\Property(
 *         property="name_spanish",
 *         type="string",
 *         description="Nombre de la profesión en español"
 *     )
 * )

 */

    public function toArray(Request $request): array
    {

        return [
            "id" => $this->id,
            "name_spanish" => $this->name_spanish,
            "name" => $this->name,
        ];
    }
}

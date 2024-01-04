<?php

namespace App\Http\Resources;

use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
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
